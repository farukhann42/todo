<header>
	<div class="jumbotron text-center">
		<h1>Create Your's ToDo List</h1>
	</div>
</header>

<section>
	<div class="container">
		<div class="todo">
			<form>
				<textarea autofocus="" id="todo" name="todo" cols="" rows="10"></textarea>
				<div class="buttonGroup">
					<button name="del" type="button" class="btn btn-danger clean">Clean</button>
					<button name="add" type="button" class="btn btn-success add">Add</button>
				</div>
			</form>
		</div>
		<div class="todoList">
			<ul id="list">
				<li class="show"><a class="btn btn-info w-100 py-3" href="index.php?page=list">Look at the list</a></li>
			</ul>
		</div>
	</div>
</section>