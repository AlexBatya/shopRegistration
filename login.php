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
                <form action="vendor/signin.php" method="post" class="registration_form">
                <h2 style="text-align:center;color:aliceblue;">Авторизация</h2>

                    <input type="text" class="registration__input" name="login" placeholder="Логин">
                    <input type="text" class="registration__input" name="password" placeholder="Пароль">
                    <input type="submit" value="Авторизоваться" class="registration__submit">
                    <p class="msg" style='text-align:center;'> Еще не зарегестрированы?<a style="color:blue;" href="./reg.php">Зарегестрироваться</a></p>
                </form>
            </div>
        </div>
    </div>

  </body>
</html>