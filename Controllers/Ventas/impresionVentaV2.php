<?
require "../conexion.php";
require "../../Generales/reultado.php";
require "../../Models/Ventas/VentasNotaViewModel.php";
require_once("../../MPDF57/mpdf.php");
require_once '../../../Herramientas/numeroaletras.php';

header("access-control-allow-origin:*");
header("Access-Control-Allow-Methods: POST, GET, PUT");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
$conexion=new conexion();


$compania=$_GET['compania'];
$nota =$_GET['nota'];
 $codigoHTMLTEMP='';
 $codigoPagare='';
$datosGenerales = $conexion->storeV2('stVentaDatosConultaV2('.$compania.','.$nota.')');

 while ($filaG = $datosGenerales->FETCH_ASSOC()) {
	 $total=(float)$filaG['total'];
	 $direccion=(String)$filaG['direccion'];
	 $telefono=(String)$filaG['telefono'];
	 $correo=(String)$filaG['correo'];
   $id=(String)$filaG['id'];
   $abono=(String)$filaG['abono'];
   $date = date( $filaG['dateUpdate']);
   $dateUpdate=(String)$filaG['dateUpdate'];
   $abono=(String)$filaG['abono'];
   $tipoVenta=(int)$filaG['tipoVenta'];
   $abono=(float)$filaG['abono'];
   $nombre=(String)$filaG['nombre'];
   $apellidos=(String)$filaG['apellidos'];



	 $codigoHTMLTEMP.='<tr>
			 <th scope="row" align="left">'.$filaG['codigo'].'</th>
			 <td align="center">'.$filaG['idproducto'].'</td>
       <td align="center">'.$filaG['proveedor'].'</td>
			 <td align="center">'.$filaG['cantidad'].'</td>
			 <td align="center">'.$filaG['precioVendido'].'</td>
			 <td align="center">'.$filaG['precioTotal'].'</td>
	 </tr>';

 }

 //$formatterES = new NumberFormatter("es-ES", NumberFormatter::SPELLOUT);
//$formatterES->format(123.45);
$modelonumero = new modelonumero();
$numeroaletras = new numeroaletras();

if($tipoVenta>0)
{
  $tipo='credito';

  $codigoPagoHTML.='<tr >
             <td colspan="4"></td>
             <td align="left">total $</td>
             <td align="left">'.$total.'</td>
         </tr>
         <tr>
             <td colspan="4"></td>
             <td align="left">Abono $</td>
             <td align="left">'.$abono.'</td>
         </tr>
         <tr>
             <td colspan="4"></td>
             <td align="left">Resta $</td>
             <td align="left" class="gray">$ '.($total-$abono).'</td></tr>';

             $codigoPagare='<p><h5>Yo '.$nombre.' '.$apellidos.
             ' debo y me comprometo a pagar la cantidad de '.$total.
             ' siendo en numero la cantidad <i>'.$modelonumero->numtoletras(abs($total),'PESOS MEXICANOS','M.N.').' </i>'.
             ' a la orden de: Miguel Angel Ayala Rios '.
             'en esta ciudad o en cualquier otra que se me requiera el pago la fecha '.
             date("d-m-Y",strtotime($date."+ 2 week")).
             ' el valor recibido a mi muestra entera satisfaccion este pagare forma parte de una serie enumerada del 1 al __ '.
             'y todos estan sujetos a la condicion de que al no pagarse cualquiera de ellos a su vencimiento seran exigibles todos los que sigan en numero a los demas ya vencidos desde la fecha de vencimiento de este documento se cobrara interes moratorio a razon del 4% mensual hasta la fecha de su liquidacion.<br><br><br>'.
             'firma de conformidad :__________________________________'.
             '</h5></p>';

}
else{
  $tipo='contado';
  $codigoPagoHTML.='<!-- <tr >
             <td colspan="4"></td>
             <td align="left">Subtotal $</td>
             <td align="left">'.($total-($total*0.16)).'</td>
         </tr>
         <tr>
             <td colspan="4"></td>
             <td align="left">Iva $</td>
             <td align="left">'.($total*0.16).'</td>
         </tr>
         <tr>
             <td colspan="4"></td>
             <td align="left">Descuento $</td>
             <td align="left">0</td>
         </tr> -->
         <tr>
             <td colspan="4"></td>
             <td align="left">Total $</td>
             <td align="left" class="gray">$ '.$total.'</td></tr>';

}





$codigoHTML='
<html lang="en">
<head>
<meta charset="UTF-8">
<title>nota #'.$_GET['nota'].'</title>
<style type="text/css">
   * {
       font-family: Verdana, Arial, sans-serif;
   }
   table{
       font-size: x-small;
   }
   tfoot tr td{
       font-weight: bold;
       font-size: x-small;
   }
   .gray {
       background-color: lightgray
   }
   .backgroundIMG {
     background-image: url(../../../imagenes/logosCompanias/mcbrosslogoV2.png);
 	background-position: center;
 	background-repeat: no-repeat;
 	position: relative;
  opacity: 0.9;
  height:20px;
}

</style>
</head>
<body>
<div class="backgroundIMG">
 <table width="100%">
   <tr>
   <td align="left">
       <h3>Nota de venta #'.$id.'</h3>
       <br>
       '.'<strong>Fecha : </strong>'.$dateUpdate.''.'
       <br>

       '.'<strong>Forma de pago : </strong>'.$tipo.'
       </td>
       <td align="right">
           <h3>MC-bross</h3>
           <pre>
               RFC:AARM841010G98
               Independencia 285, Ruben Jaramillo, 62587 Temixco, Mor.
               7772534691
           </pre>
       </td>
   </tr>
 </table>
 <table width="100%">
   <tr>';
      $codigoHTML.='<td><strong>Cliente : </strong>'.	 $nombre.' '.$apellidos.'</td>';
      $codigoHTML.='<td><strong>direccion : </strong>'. $direccion.'</td>';
      $codigoHTML.='<td><strong>telefono : </strong>'. $telefono.'</td>';


   $codigoHTML.='</tr>
 </table>
 <br/>
 <table width="100%">
   <thead style="background-color: lightgray;">
     <tr>
       <th>codigo</th>
       <th>Descripcion</th>
       <th>proveedor</th>
       <th>Cantidad</th>
       <th>Precio Unitario $</th>
       <th>Total $</th>
     </tr>
   </thead>
   <tbody>';
	$codigoHTML.= $codigoHTMLTEMP;
  $codigoHTML.= '</tbody>
   <tfoot>
   <tr></tr>
   <tr></tr>

      <!-- <tr style="display: none;">
           <td colspan="4"></td>
           <td align="left">Subtotal $</td>
           <td align="left">'.($total-($total*0.16)).'</td>
       </tr>
       <tr style="display: none;">
           <td colspan="4"></td>
           <td align="left">Iva $</td>
           <td align="left">'.($total*0.16).'</td>
       </tr>
       <tr style="display: none;">
           <td colspan="4"></td>
           <td align="left">Descuento $</td>
           <td align="left">0</td>
       </tr>
       <tr>
           <td colspan="4"></td>
           <td align="left">Total $</td>
           <td align="left" class="gray">$ '.$total.'</td>
       </tr> -->';
       $codigoHTML.=$codigoPagoHTML;
   $codigoHTML.='</tfoot>
 </table>
 <footer>';
$codigoHTML.=$codigoPagare;
 '<p align="right"><i>este no es un comprobante fiscal, es parte de la facturacion global</i> <p>

 </footer>
 </div>
 <div style="text-align: center;">
    <h2><i>Gracias por su compra</i></h2>
 </div>
</body>
</html>';


$mpdf= new mPDF('c','A4');

$mpdf->writeHTML(utf8_encode($codigoHTML));

$mpdf->Output('venta.pdf','I');
// Descargar el PDF generado
//$dompdf->stream("Reporte_usuarios.pdf");

?>
