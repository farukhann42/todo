<?php 

$query = $db -> prepare("SELECT * FROM todo");
$query -> execute();

?>
<div class="container-fluid">
	<ul class="list-group">
		<h1 class="text-center mt-3 p-2">TODO LIST</h1>
		<?php
		if ($query -> rowCount()) {
			foreach ($query as $row) {
				echo '<li class="list-group-item txt my-1"><i>'.$row["yazi"].'</i>
				<div class="buttonGroup">
				<a class="btn btn-info mx-1 px-4" href="index.php?page=edit&id='.$row["id"].'">Edit</a>
				<button data-id="'.$row["id"].'" class="btn btn-danger mx-1 sil" name="sil">Delete</button>
				</div></li>';
			}
		}
		?>
	</ul>
</div>

<!-- <a class="btn btn-info mx-1 px-4" href="edit.php?id='.base64_encode($row["id"]).'">Edit</a>
				<a class="btn btn-danger mx-1" href="index.php?page=del?id='.base64_encode($row["id"]).'">Delete</a> -->