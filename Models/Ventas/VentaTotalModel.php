<?php
class VentaTotalModel
{
  public $pcompania;
  public $ptotal;
  public $pcliente;
  public $pdireccion;
  public $ptelefono;
  public $pcorreoElectronico;
  public $puserUpdate;
  public $pProductos;

  public function __construct(
    $pcompania,
    $ptotal,
    $pcliente,
    $pdireccion,
    $ptelefono,
    $pcorreoElectronico,
    $puserUpdate,
    $pProductos){
      $this->pcompania=$pcompania;
      $this->ptotal=$ptotal;
      $this->pcliente=$pcliente;
      $this->pdireccion=$pdireccion;
      $this->ptelefono=$ptelefono;
      $this->pcorreoElectronico=$pcorreoElectronico;
      $this->puserUpdate=$puserUpdate;
      $this->pProductos=$pProductos;

  }
}

?>
