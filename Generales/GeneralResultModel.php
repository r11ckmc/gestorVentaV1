<?php
 class GeneralResultModel{
  public $codigo;
  public $mensaje;

  public function __construct($codigo,$mensaje){

    $this->codigo=$codigo;
    $this->mensaje=$mensaje;
  }
}
?>
