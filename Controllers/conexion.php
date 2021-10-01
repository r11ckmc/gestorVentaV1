<?php
  class conexion{
    private $server="162.241.2.36";
    private $user="limonerc_saidsot";
    private $password="123456";
    private $database="limonerc_gestorRefaccionariaV1";
    private $port;

    public function __construct(){

        $this->conexion=new mysqli(
            $this->server,
            $this->user,
            $this->password,
            $this->database);


    }

    private function DtoConexion(){
      $direccion=dirname(__file__);
      $jsonData=file_get_contents("/www.invisar.com.mx/Ricardo/phpAPI/config");
      return json_decode($jsonData, true);
    }

    private function ConvertirUtf8($lst){
      array_walk_recursive($lst,function(&$item,$key){
        if(!mb_detect_encoding($item,'utf-8',true)){
          $item=utf8_encode($item);
        }
      });
      return $lst;
    }

    public function clienteDtoDemograficos(){
      $result=$this->conexion->query("call stDtoDemograficosBuscarUsuario");
      $resultArray=array();
      foreach ($result as $key) {
          $resultArray[]=$key;
        // code...
      }
      //return "tst";
      return $this->ConvertirUtf8($resultArray);
    }

    public function store($query){
      $result=$this->conexion->query("call ".$query);
      $resultArray=array();
      foreach ($result as $key) {
          $resultArray[]=$key;
        // code...
      }
      //return "tst";
      return $this->ConvertirUtf8($resultArray);
    }

    public function storeV2($query){

      $result=$this->conexion->query("call ".$query);

      return $result;

    }
  }
 ?>
