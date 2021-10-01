<?php
  class AumentosModel{
    public $nombre;
    public $id;
    public $aumento;
    public $compania;


    public function __construct($nombre,$id,$aumento,$compania){


      $this->nombre=$nombre;
      $this->id=$id;
      $this->aumento=$aumento;
      $this->compania=$compania;

    }

    }

 ?>
