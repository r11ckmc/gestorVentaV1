<?
require "../conexion.php";
require "../../Generales/reultado.php";
require "../../Models/Ventas/VentasNotaViewModel.php";
header("access-control-allow-origin:*");
header("Access-Control-Allow-Methods: POST, GET, PUT");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
$conexion=new conexion();

switch ($_SERVER['REQUEST_METHOD']) {

    case 'POST':
    $_POST=json_decode(file_get_contents('php://input'),true);
    $compania=$_POST['compania'];
    $total=$_POST['total'];
    $cliente=$_POST['cliente'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $correoElectronico=$_POST['correoElectronico'];
    $userUpdate=$_POST['userUpdate'];
    $Productos=$_POST['Productos'];

       $datos = $conexion->
       storeV2('st_VentaNota_InsertaV1('.
       (int)$compania.','.
       (float)$total.
       ',\''.$cliente.'\''.
       ',\''.$direccion.'\''.
       ',\''.$telefono.'\''.
       ',\''.$correoElectronico.'\''.','.
       (int)$userUpdate.
       ',\''.$Productos.'\''.
       ')');
       $objectArray=array();
       $objectArray["items"]=array();
       while ($row = $datos->FETCH_ASSOC()) {
          $item=new VentasNotaViewModel(
            $row['nota']
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
