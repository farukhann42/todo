<?php
if (isset($_POST['add'])) {
require_once 'pages/islemler.php';
  $text = $_POST['todo'];
  echo $text;
  $islem = new Data();
    $islem->AddData($text);
  }
?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <meta name="content-type"
   content="text/html charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <link rel="stylesheet" href="assets/css/style.css" />

  <title>Todo</title>
</head>

<body>
  <header>
    <div class="container h-100">
      <div class="menu">
        <ul>
          <li><a href="index.php">Add List Item</a></li>
          <li><a href="pages/list.php">Show The List</a></li>
        </ul>
      </div>
    </div>
  </header>
  <section>
    <div class="container">
      <div class="mt-3 text-center">
        <h1>Todo List</h1>
      </div>

      <form action="/web/todo/index.php" method="POST">
        <textarea name="todo" id="todo" cols="" rows="10"></textarea>
      <div class="buttonGroup">
        <button class="btn btn-danger clean">Clean</button>
        <button name="add" class="btn btn-success">Add</button>
      </div>
      </form>
    </div>

    <div class="add">
      <div class="container">
        <ul class="addList">
          <li class="show">
            <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae eligendi blanditiis numquam! Enim
              cum illo dicta repudiandae! Voluptate harum nihil quam tempora optio aspernatur nam architecto a, debitis
              aliquid beatae.</span>
            <a href="#"><i class="fas fa-trash"></i></a>
          </li>
          <li class="show">
            <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae eligendi blanditiis numquam! Enim
              cum illo dicta repudiandae! Voluptate harum nihil quam tempora optio aspernatur nam architecto a, debitis
              aliquid beatae.</span>
            <a href="#"><i class="fas fa-trash"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <footer>
    <i>Todo List &copy;</i>
  </footer>

  <!-- Bootstrap 4 Cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- User Javascript -->
  <script src="assets/js/main.js" type="text/javascript"></script>
</body>

</html>
