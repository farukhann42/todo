<?php
  require_once 'config.php';

  class Data{

    public $db;
    function __construct(){
      $db_connection = new dbConnection();
      $this->db = $db_connection->connect();
      return $this->db;
    }

    public function AddData($text){
      // $text = $_POST[$name];
      $query = $this->db->prepare("INSERT INTO yazi(yazi) VALUES $text");
      $query->execute(array(':yazi' => $text));
    }

    function UpdateData($text, $id){
      $query = $this->db->prepare("UPDATE yazi(yazi) SET :yazi WHERE id=:id");
      $query->execute(
        array('yazi' => $text, 'id' => $id)
      );
    }

    function DeleteData($id){
      $query = $this->db->prepare("DELETE FROM yazi WHERE id=:id");
      $query -> execute(
        array('id'=>$id)
      );
    }
  }

?>
