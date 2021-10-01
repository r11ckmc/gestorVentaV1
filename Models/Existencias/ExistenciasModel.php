<?php
class ExistenciasModel
{
public $producto;
public $MarcaParte;
public $anio;
public $Codigo;
public $CodigoSAT;
public $tieneiva;
public $Existencias;
public $Minimo;
public $Maximo;
public $AArea;
public $UAlmacen;
public $UAnaCua;
public $habilitarUbicacion;
public $Pasillo;
public $nivel;
public $CambiarPrecios;
public $desc;
public $precio;
public $precioIP;
public $precioIT;
public $precioIM;
public $userUpdate;
  public function __construct(
$producto,
$MarcaParte,
$anio,
$Codigo,
$CodigoSAT,
$tieneiva,
$Existencias,
$Minimo,
$Maximo,
$AArea,
$UAlmacen,
$UAnaCua,
$habilitarUbicacion,
$Pasillo,
$nivel,
$CambiarPrecios,
$desc,
$precio,
$precioIP,
$precioIT,
$precioIM,
$userUpdate
){
 $this->producto=$producto;
 $this->MarcaParte=$MarcaParte;
 $this->anio=$anio;
 $this->Codigo=$Codigo;
 $this->CodigoSAT=$CodigoSAT;
 $this->tieneiva=$tieneiva;
 $this->Existencias=$Existencias;
 $this->Minimo=$Minimo;
 $this->Maximo=$Maximo;
 $this->AArea=$AArea;
 $this->UAlmacen=$UAlmacen;
 $this->UAnaCua=$UAnaCua;
 $this->habilitarUbicacion=$habilitarUbicacion;
 $this->Pasillo=$Pasillo;
 $this->nivel=$nivel;
 $this->CambiarPrecios=$CambiarPrecios;
 $this->desc=$desc;
 $this->precio=$precio;
 $this->precioIP=$precioIP;
 $this->precioIT=$precioIT;
 $this->precioIM=$precioIM;
 $this->userUpdate=$userUpdate;
}
}
?>
