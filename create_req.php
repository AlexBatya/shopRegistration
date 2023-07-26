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
  <body class="body-main" style></body>
      <?include('header.php');?>
      <div class="registration">
        <div class="container">
            <div class="registration__body">
                <form action="vendor/add_request.php" method="post" enctype="multipart/form-data" class="registration_form">
                <h2 style="color:aliceblue;text-align:center;">Заказать ремонт</h2>

                    <h5>Добавьте фото</р><input type="file" class="registration__input" name="img">
                    <input type="text" class="registration__input" name="title" placeholder="Название ремонта">
                    <textarea class="registration__textarea" name="text" id="" cols="30" rows="50" placeholder="Что случилось?"></textarea>
                    <button class="registration__button">Отправить на рассмотрение</button>
                </form>
            </div>
        </div>
    </div>

  </body>
</html>