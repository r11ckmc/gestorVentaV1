<?
require "../conexion.php";
require "../../Generales/reultado.php";
require "../../Models/Ventas/VentasNotaViewModel.php";
require_once("../../MPDF57/mpdf.php");
header("access-control-allow-origin:*");
header("Access-Control-Allow-Methods: POST, GET, PUT");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
$conexion=new conexion();

$compania=$_GET['compania'];
$nota =$_GET['nota'];
 $codigoHTMLTEMP='';
$datosGenerales = $conexion->storeV2('stVentaDatosConultaV1('.$compania.','.$nota.')');
 while ($filaG = $datosGenerales->FETCH_ASSOC()) {
	 $total=(String)$filaG['total'];
	 $cliente=(String)$filaG['cliente'];
	 $direccion=(String)$filaG['direccion'];
	 $telefono=(String)$filaG['telefono'];
	 $correo=(String)$filaG['correo'];
   $id=(String)$filaG['id'];
   $dateUpdate=(String)$filaG['dateUpdate'];

	 $codigoHTMLTEMP.='<tr>
			 <th scope="row" align="left">'.$filaG['codigo'].'</th>
			 <td align="center">'.$filaG['idproducto'].'</td>
       <td align="center">'.$filaG['proveedor'].'</td>
			 <td align="center">'.$filaG['cantidad'].'</td>
			 <td align="center">'.$filaG['precioVendido'].'</td>
			 <td align="center">'.$filaG['precioTotal'].'</td>
	 </tr>';

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

       '.'<strong>Forma de pago : </strong>'. 'contado'.'
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
      $codigoHTML.='<td><strong>Cliente : </strong>'.	 $cliente.'</td>';
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
       </tr> -->
       <tr>
           <td colspan="4"></td>
           <td align="left">Total $</td>
           <td align="left" class="gray">$ '.$total.'</td>
       </tr>
   </tfoot>
 </table>
 <footer>
  <p align="right"><i>este no es un comprobante fiscal, es parte de la facturacion global</i> <p>

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
