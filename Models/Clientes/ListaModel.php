<?php
class ListaModel{
  public $id;

  public $nombre;
  public $apellidos;
  public $mail;
  public $municipio;
  public $telefono;
  public $taller;
  public $clave;
  public $direccion;


  public function __construct($id,$nombre,$apellidos,
    $mail,
    $municipio,
    $telefono,
    $taller,
    $clave,
    $direccion){
      $this->id=$id;
      $this->nombre=$nombre;
      $this->apellidos=$apellidos;
      $this->mail=$mail;
      $this->municipio=$municipio;
      $this->telefono=$telefono;
      $this->taller=$taller;
      $this->clave=$clave;
      $this->direccion=$direccion;


  }
}

?>
