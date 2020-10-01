<?php 

$user = "root";
$pass = "";
$dbname = "test";

try{
	$db = new PDO('mysql:host=localhost; charset=utf8; dbname='.$dbname, $user, $pass);

}catch (Exception $e){
	echo "Bağlantı Problemi :" . $e ->getMessage();
}

sleep(5);

$dbh = null;

?>