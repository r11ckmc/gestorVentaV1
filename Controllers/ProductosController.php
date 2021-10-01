<?php
    //conexion =new conexion();
    require_once "conexion.php";
    $conexion=new conexion();

    switch ($_SERVER['REQUEST_METHOD']) {
      case 'GET':
    //  print_r('si entro');

        //$_POST=json_decode(file_get_contents('php://input'),true);
        //$parametros=$_POST['IDCliente'];
         print_r($conexion->store('stProductosConsultaBetaJurimo'));
        break;

      default:
        // code...
        break;

}

?>
