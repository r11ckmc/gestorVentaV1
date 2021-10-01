<?
require "../conexion.php";
require "../../Generales/reultado.php";
require "../../Models/Aumentos/AumentosModel.php";
header("access-control-allow-origin:*");

$conexion=new conexion();

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':

     $datos = $conexion->storeV2('stProductosConsultaBetaJurimo');
     $objectArray=array();
     $objectArray["items"]=array();
     while ($row = $datos->FETCH_ASSOC()) {
        $item=new ProductosViewModel(
          $row['codigoProveedor'],
          $row['codigoBarras'],
          $row['descripcion'],
          $row['existencia'],
          $row['preciobase'],
          $row['precio1'],
          $row['precio2'],
          $row['precio3']
        );
        array_push($objectArray["items"],$item);

     }
     $vresultado = new reultado(1,"peticion exitosa",$objectArray["items"]);
     echo json_encode($vresultado);
    break;

  default:
    // code...
    break;

}


?>
