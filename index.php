<?php 

require 'header.php';

if ($_GET) {
	$page = $_GET['page'];
	switch ($page) {
		case 'list':
			require 'list.php';
			break;
		case 'add':
			require 'add.php';
			break;
		case 'del':
			require 'del.php';
			break;
		case 'edit':
			require 'edit.php';
			break;
		default:
			require 'list.php';
			break;
	}
}else{
	require 'list.php';
}

require 'footer.php'
?>