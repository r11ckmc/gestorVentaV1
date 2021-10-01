<?
require "../conexion.php";
require "../../Generales/reultado.php";
require "../../Models/Clientes/AgregarModel.php";
header("access-control-allow-origin:*");
header("Access-Control-Allow-Methods: POST, GET, PUT");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
$conexion=new conexion();

switch ($_SERVER['REQUEST_METHOD']) {

    case 'POST':
    $_POST=json_decode(file_get_contents('php://input'),true);
    $pidcompania=$_POST['idcompania'];
    $pnombre =$_POST['nombre'];
    $papellidos =$_POST['apellidos'];
    $ptelefono =$_POST['telefono'];
    $pmail =$_POST['mail'];
    $pdireccion=$_POST['direccion'];
    $psexo =$_POST['sexo'];
    $ptaller=$_POST['taller'];
    $phabilitado =$_POST['habilitado'];
    $pfoto=$_POST['foto'];

    $prazoSocial=$_POST['razoSocial'];
    $pestado=$_POST['estado'];
    $pmunicipio=$_POST['municipio'];
    $pcp=$_POST['cp'];
    $pRFC=$_POST['RFC'];
    $pCURP=$_POST['CURP'];
    $puserUpdate=$_POST['userUpdate'];








       $datos = $conexion->
       storeV2('st_registroCliente_inserta('.
       (int)$pidcompania.','.
       '\''.$pnombre.'\''.
       ',\''.$papellidos.'\''.
       ',\''.$ptelefono.'\''.
       ',\''.$pmail.'\''.
       ',\''.$pdireccion.'\''.','.
       (int)$psexo.','.
       '\''.$ptaller.'\''.','.
       (int)$phabilitado.','.
       '\''.'obsoleto'.'\''.','.
       '\''.$prazoSocial.'\''.','.
       '\''.$pestado.'\''.','.
       '\''.$pmunicipio.'\''.','.
       '\''.$pcp.'\''.','.
       '\''.$pRFC.'\''.','.
       '\''.$pCURP.'\''.','.
       (int)$puserUpdate.''.
       ')');


       $objectArray=array();
       $objectArray["items"]=array();
       while ($row = $datos->FETCH_ASSOC()) {
          $item=new AgregarModel(
            $row['clave']
          );

                          $nombreArchivo =$row['clave'].".png";
                          $rutaImagenSalida = "../../../imagenes/".$nombreArchivo;
                          $imagenBinaria = base64_decode($_POST['foto']);
                          $im = imageCreateFromString($imagenBinaria);
                          imagepng($im, $rutaImagenSalida,null,PNG_ALL_FILTERS);

          $vresultado = new reultado(1,"peticion exitosa2",$row['clave']);

          array_push($objectArray["items"],$item);

       }
       echo json_encode($vresultado);
      break;

  default:
    break;

}


?>
