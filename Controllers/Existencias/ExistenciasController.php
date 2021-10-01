<?
require "../conexion.php";
require "../../Generales/GeneralResultModel.php";
require "../../Generales/reultado.php";
require "../../Models/Existencias/ExistenciasModel.php";
header("access-control-allow-origin:*");
header("Access-Control-Allow-Methods: POST, GET, PUT");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
$conexion=new conexion();

switch ($_SERVER['REQUEST_METHOD']) {

    case 'POST':
    $_POST=json_decode(file_get_contents('php://input'),true);
    $producto=$_POST['producto'];
    $MarcaParte=$_POST['MarcaParte'];
    $anio=$_POST['anio'];
    $Codigo=$_POST['Codigo'];
    $CodigoSAT=$_POST['CodigoSAT'];
    $tieneiva=$_POST['tieneiva'];
    $Existencias=$_POST['Existencias'];
    $Minimo=$_POST['Minimo'];
    $Maximo=$_POST['Maximo'];
    $AArea=$_POST['AArea'];
    $UAlmacen=$_POST['UAlmacen'];
    $UAnaCua=$_POST['UAnaCua'];
    $habilitarUbicacion=$_POST['habilitarUbicacion'];
    $Pasillo=$_POST['Pasillo'];
    $nivel=$_POST['nivel'];
    $CambiarPrecios=$_POST['CambiarPrecios'];
    $desc=$_POST['desc'];
    $precio=$_POST['precio'];
    $precioIP=$_POST['precioIP'];
    $precioIT=$_POST['precioIT'];
    $precioIM=$_POST['precioIM'];
    $userUpdate=$_POST['userUpdate'];






/*
printf('st_registroCliente_inserta('.
'\''.$Proveedor.'\','.
'\''.$Familia.'\','.
'\''.$producto.'\','.
'\''.$MarcaParte.'\','.
'\''.$anio.'\','.
'\''.$Codigo.'\','.
'\''.$CodigoSAT.'\','.
(int)$tieneiva.','.
(int)$Existencias.','.
(int)$Minimo.','.
(int)$Maximo.','.
'\''.$AArea.'\','.
'\''.$UAlmacen.'\','.
'\''.$UAnaCua.'\','.
(int)$habilitarUbicacion.','.
(int)$Pasillo.','.
(int)$nivel.','.
(int)$CambiarPrecios.','.
'\''.$desc.'\','.
(float)$precio.','.
(float)$precioIP.','.
(float)$precioIT.','.
(float)$precioIM.','.
(int)$userUpdate.','.

    ')');*/



    /  $datos = $conexion->
       storeV2('st_Almacen_inertarModificarV1('.
       '\''.$producto.'\','.
'\''.$MarcaParte.'\','.
'\''.$anio.'\','.
'\''.$Codigo.'\','.
'\''.$CodigoSAT.'\','.
(int)$tieneiva.','.
(int)$Existencias.','.
(int)$Minimo.','.
(int)$Maximo.','.
'\''.$AArea.'\','.
'\''.$UAlmacen.'\','.
'\''.$UAnaCua.'\','.
(int)$habilitarUbicacion.','.
(int)$Pasillo.','.
(int)$nivel.','.
(int)$CambiarPrecios.','.
'\''.$desc.'\','.
(float)$precio.','.
(float)$precioIP.','.
(float)$precioIT.','.
(float)$precioIM.','.
(int)$userUpdate.','.
       ')');


       $objectArray=array();
       $objectArray["items"]=array();
       while ($row = $datos->FETCH_ASSOC()) {
          $item=new GeneralResultModel(
            $row['codigo'],
            $row['Mensaje']
          );

          $vresultado = new reultado(1,"peticion exitosa2",$item);

          array_push($objectArray["items"],$item);

       }
       echo json_encode($vresultado);
      break;

  default:
    break;

}


?>
