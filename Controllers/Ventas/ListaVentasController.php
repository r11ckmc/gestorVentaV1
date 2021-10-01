<?
require "../conexion.php";
require "../../Generales/reultado.php";
require "../../Models/Ventas/listaVentasModel.php";
header("access-control-allow-origin:*");
header("Access-Control-Allow-Methods: POST, GET, PUT");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
$conexion=new conexion();

switch ($_SERVER['REQUEST_METHOD']) {
  case 'PUT':

  $_POST=json_decode(file_get_contents('php://input'),true);
  $parametros=$_POST['IDCompania'];
     $datos = $conexion->storeV2('stVentaConsulta('.$parametros.')');
     $objectArray=array();
     $objectArray["items"]=array();
     while ($row = $datos->FETCH_ASSOC()) {
        $item=new listaVentasModel(
          $row['idProductos'],
          $row['codigoBarras'],
          $row['codigoProveedor'],
          $row['descripcion'],
          $row['precio'],
          $row['proveedor'],
          $row['existencias'],
          $row['iva'],
          $row['aumento']
        );
        array_push($objectArray["items"],$item);

     }
     $vresultado = new reultado(1,"peticion exitosa",$objectArray["items"]);
     echo json_encode($vresultado);
    break;


    case 'POST':
    $_POST=json_decode(file_get_contents('php://input'),true);
    $parametros=$_POST['IDCompania'];
    $parametros2=$_POST['codigo'];

       $datos = $conexion->storeV2('stVentaConsultaCodigoBarras('.$parametros.',\''.$parametros2.'\')');
       $objectArray=array();
       $objectArray["items"]=array();
       while ($row = $datos->FETCH_ASSOC()) {
          $item=new listaVentasModel(
            $row['idProductos'],
            $row['codigoBarras'],
            $row['codigoProveedor'],
            $row['descripcion'],
            $row['precio'],
            $row['proveedor'],
            $row['existencias'],
            $row['iva'],
            $row['aumento']
          );
          array_push($objectArray["items"],$item);

       }
       $vresultado = new reultado(1,"peticion exitosa2",$objectArray["items"]);
       echo json_encode($vresultado);
      break;

  default:
    // code...
    break;

}


?>
