<?php 

require_once 'database.php';

if(isset($_POST['todotext'])) {
	$json = $_POST['todotext'];
	$kayit = $db->prepare("INSERT INTO todo SET yazi = ?");
	$result = $kayit->execute(array($json));
	echo json_encode($json);
} else {
	echo "Olmadı";
}

?>