<?
require "../conexion.php";
require "../../Generales/reultado.php";
require "../../Models/Clientes/ListaModel.php";
header("access-control-allow-origin:*");
header("Access-Control-Allow-Methods: POST, GET, PUT");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
$conexion=new conexion();

switch ($_SERVER['REQUEST_METHOD']) {
  case 'POST':

  $_POST=json_decode(file_get_contents('php://input'),true);
  $parametros=$_POST['IDCompania'];
     $datos = $conexion->storeV2('st_clientes_consulta('.$parametros.')');
     $objectArray=array();
     $objectArray["items"]=array();
     while ($row = $datos->FETCH_ASSOC()) {
        $item=new ListaModel(
          $row['id'],
          $row['nombre'],
          $row['apellidos'],
          $row['mail'],
          $row['municipio'],
          $row['telefono'],
          $row['taller'],
          $row['clave'],
          $row['direccion']
        );
        array_push($objectArray["items"],$item);

     }
     $vresultado = new reultado(1,"peticion exitosa",$objectArray["items"]);
     echo json_encode($vresultado);
    break;
}
?>
