<?php require_once 'database.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta name="content-type" content="text/html charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="keywords" content="ToDo List,List,ToDo,yapılacaklar listesi" />
	<meta name="subject" content="ToDo List" />
	<meta name="language" content="Turkish" />
	<meta name="title" content="ToDoList" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="distribution" content="local" />

	<!-- Bootstrap 4 CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	
	<link rel="stylesheet" href="assets/css/style.css">

	<title>ToDo List</title>
</head>
<body>
	<nav>
		<div class="container">
			<div class="header">
				<ul class="menu">
					<li>
						<a class="nav-link" href="?page=list">Look At The List</a>
					</li>
					<li>
						<a class="nav-link" href="?page=add">Add Todo List Item</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>