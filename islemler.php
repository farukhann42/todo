<?php 

if (isset($_POST['todotext'])) {
	$text = $_POST['todotext'];
	$islemler = new islem(); 
	$islemler->ekle($text);
	echo $text; 
}

class islem{

	public function ekle($text){
		require 'database.php';
		$kayit = $db->prepare("INSERT INTO todo SET yazi = ?");
		$result = $kayit->execute(array($text));
	}
}

?>