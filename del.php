<?php 

$id = $_POST['id'];
$kayit = $db->prepare("DELETE FROM todo WHERE id = :id");
$result = $kayit->execute(array(":id" => $id));

?>