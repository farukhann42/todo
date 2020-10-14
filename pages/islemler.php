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
      $query = $this->db->prepare("INSERT INTO yazi SET yazi = :yazi");
      $query->execute(array(':yazi' => $text));
    }

    function UpdateData($text, $id){
      $query = $this->db->prepare("UPDATE yazi SET yazi = :yazi WHERE id=:id");
      $query->execute(
        array(':yazi' => $text, ':id' => $id)
      );
    }

    function DeleteData($id){
      $query = $this->db->prepare("DELETE FROM yazi WHERE id=:id");
      $query -> execute(
        array('id'=>$id)
      );
    }
  }

  // ekleme işlemi
  if (isset($_POST['add'])) {
    $text = $_POST['todo'];
    $islem = new Data();
    $islem->AddData($text);
    header("Location: ../index.php");
  }

  // güncelleme işlemi
  if (isset($_POST['update']) && isset($_GET['id'])) {
    $id = $_GET['id'];
    $text = $_POST['todo'];
    $islem = new Data();
    $islem->UpdateData($text,$id);
    header("Location: list.php");
  }

  // silme işlemi
  if (isset($_GET['id']) && !isset($_POST['update'])) {
    $id = $_GET['id'];
    $islem = new Data();
    $islem->DeleteData($id);
    $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
    header("Location: $url");
  }

?>
