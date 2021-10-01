<?
   class ProductosViewModel{

    public $codigoProveedor;
    public $codigoBarras;
    public $descripcion;
    public $existencia;
    public $preciobase;
    public $precio1;
    public $precio2;
    public $precio3;

    public function __construct($CP,$CB,$desc,$exis,$pre,$pre1,$pre2,$pre3){


      $this->codigoProveedor=$CP;
      $this->codigoBarras=$CB;
      $this->descripcion=$desc;
      $this->existencia=$exis;
      $this->preciobase=$pre;
      $this->precio1=$pre1;
      $this->precio2=$pre2;
      $this->precio3=$pre3;
    }

  }

?>
