<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="content-type" content="text/html charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="keywords" content="ToDo List,List,ToDo,yapılacaklar listesi" />
	<meta name="subject" content="ToDo List" />
	<meta name="language" content="English" />
	<meta name="title" content="ToDoList" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="distribution" content="local" />

	<!-- Bootstrap 4 CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>ToDo List</title>
</head>
<body>
	<div class="container">
		<ul class="list-group">
			<?php

			try {

				require_once 'database.php';

				$sorgu = $db->query("SELECT yazi FROM todo");

				while ($cikti = $sorgu->fetch(PDO::FETCH_ASSOC)) {
					echo '<li class="list-group-item">'.$cikti["yazi"].'</li>';
				}

			} catch (PDOException $e) {
				die($e->getMessage());
			}

			$db = null;

			?>
			
		</ul>
	</div>

	<!-- Bootstrap 4 Cdn -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- User Javascript -->
	<script src="javascript/yoluYaz" type="text/javascript"></script>
</body>
</html>