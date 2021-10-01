<?php
class listaVentasModel{
  public $idProductos;
  public $codigoBarras;
  public $codigoProveedor;
  public $descripcion;
  public $precio;
  public $proveedor;
  public $existencias;
  public $iva;
  public $aumento;

  public function __construct($idProductos,$codigoBarras,
    $codigoProveedor,
    $descripcion,
    $precio,
    $proveedor,
    $existencias,
    $iva,
    $aumento){
      $this->idProductos=$idProductos;
      $this->codigoBarras=$codigoBarras;
      $this->codigoProveedor=$codigoProveedor;
      $this->descripcion=$descripcion;
      $this->precio=$precio;
      $this->proveedor=$proveedor;
      $this->existencias=$existencias;
      $this->iva=$iva;
      $this->aumento=$aumento;

  }
}

?>
