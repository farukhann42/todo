<?php 

$id = $_GET['id'];

$query = $db -> prepare("SELECT * FROM todo WHERE id=$id");
$query -> execute();
if ($query -> rowCount()) {
	foreach ($query as $row) {
		$text = $row['yazi'];
	}
}

?>

<header>
	<div class="jumbotron text-center">
		<h1>Update Your's ToDo List</h1>
	</div>
</header>

<section>
	<div class="container">
		<div class="todo">
			<form>
				<textarea placeholder="<?php echo $text; ?>" autofocus="" id="todo" name="todo" cols="" rows="10"></textarea>
				<div class="buttonGroup">
					<button name="del" type="button" class="btn btn-danger clean">Clean</button>
					<button data-id="<?php echo $id;?>" name="update" type="button" class="btn btn-success update">Update</button>
				</div>
			</form>
		</div>
	</div>
</section>