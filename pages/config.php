<?php

  class dbConnection{
    protected $db_conn;
    public $db_host = "localhost";
    public $db_user = "root";
    public $db_pass = "123456";
    public $db_name = "todo";

    public function connect(){
        try{
          $this->db_conn = new PDO("mysql:host=$this->db_host;dbname=$this->db_name;charset=utf8",
          $this->db_user, $this->db_pass);
          $this->db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          return $this->db_conn;
        }

        catch(PDOException $e){
            return "MySQL error : " . $e->getMessage();
          }
      }
  }
?>
