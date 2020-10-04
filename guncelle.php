
<?php

require 'database.php';

$id = $_POST['id'];
$newText = $_POST['text'];
$kayit = $db->prepare("UPDATE todo SET yazi=:yazi WHERE id = :id");
$result = $kayit->execute(array(":yazi" => $newText,":id" => $id));

?>