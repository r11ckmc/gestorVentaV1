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
    $pidcompania =$_POST['pidcompania'];
    $plimiteCredito  =$_POST['plimiteCredito'];
    $pdias  =$_POST['pdias'];
    $pcalificacion  =$_POST['pcalificacion'];
    $pclave =$_POST['pclave'];
    $puserUpdate =$_POST['puserUpdate'];



    /*printf('st_Credito_InsertaV1('.
    (int)$pidcompania.','.
    (int)$plimiteCredito.','.
    (int)$pdias.','.
    (int)$pcalificacion.','.
    (int)$puserUpdate.','.
    '\''.$pclave.'\''.
    ')');*/

       $datos = $conexion->
       storeV2('st_Credito_InsertaV1('.
       (int)$pidcompania.','.
       (int)$plimiteCredito.','.
       (int)$pdias.','.
       (int)$pcalificacion.','.
       (int)$puserUpdate.','.
       '\''.$pclave.'\''.
       ')');


       $objectArray=array();
       $objectArray["items"]=array();
       while ($row = $datos->FETCH_ASSOC()) {

          $vresultado = new reultado(1,"peticion exitosa2",$row['mensaje']);

          array_push($objectArray["items"],$item);

       }
       echo json_encode($vresultado);
      break;

  default:
    break;

}


?>
