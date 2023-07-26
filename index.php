<?
require_once('vendor/connect.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="js/materialize.min.css">

  </head>
  <body class='body-img'>
      <?include('header.php');?>
      <div class="container">
        <div class="text-block">
              <h3 class="text-block__subtitle">Ремонт компютерной-техники</h3>
              <h1 class="text-block__title">РемТрон</h1>
              <p class="text-block__description">Лучший ремнот по минимальной цене!</p>
              <a href="<?if(isset($_SESSION['user'])){echo 'completed.php';}else{echo 'login.php';}?>" class="text-block__button">Отремонтируйте!</ф>
        </div>  
      </div>
      <!-- <div class="first-screen">
        <div class="text-block">
            <h3 class="text-block__subtitle">Ремонт компютерной-техники</h3>
            <h1 class="text-block__title">РемТрон</h1>
            <p class="text-block__description">Лучший ремнот по минимальной цене!</p>
            <button class="text-block__button">Отремонтируйте!</button>
          </div>  
      </div> -->
            <!-- Compiled and minified JavaScript -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
            </script>

  </body>
</html>