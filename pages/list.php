<!DOCTYPE html>
<html lang="tr">

<head>
  <meta name="content-type" content="text/html charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <link rel="stylesheet" href="../assets/css/style.css">

  <title>Listeler</title>
</head>

<body>

  <header>
    <div class="container h-100">
      <div class="menu">
        <ul>
          <li><a href="../index.php">Add List Item</a></li>
          <li><a href="list.php">Show The List</a></li>
        </ul>
      </div>
    </div>
  </header>
  <section>
    <div class="list">
      <div class="container text-center my-2 mb-5">
        <h1>Listeler</h1>
      </div>
        <ul class="listeler">
          <?php
          require_once "config.php";
          $db = new dbConnection;
          $db_conn = $db->connect();
          $sql = $db_conn -> prepare("SELECT * FROM yazi");
          $sql->execute();
          echo '<div style="font-size: x-large;" class="container text-center my-5"><i>Bulunan Kayıt Sayısı : </i>'.$sql->rowCount().'</div>';
          if ($sql->rowCount()) {
            require_once "islemler.php";
            $islem = new Data();
            foreach ($sql as $row){
              echo '<li class="listItem">
                <i>'.$row["yazi"].'</i>
                <div class="buttonGroup">
                  <a href="update.php?id='.$row["id"].'" class="update">
                    <i class="fas fa-edit fa-2x"></i>
                  </a>
                  <a href="islemler.php?id='.$row["id"].'" class="delete">
                    <i class="fas fa-trash fa-2x"></i>
                  </a>
                </div>
              </li>';
            }
          }
          else {
            echo '<div class="container">
            <li>
              <h1 class="text-center">Kayıt Bulunamadı</h1>
              </li></div>';
          }
        ?>
        </ul>
      </div>
  </section>
  <!-- Bootstrap 4 Cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- User Javascript -->
  <script src="../assets/js/main.js" type="text/javascript"></script>
</body>

</html>
