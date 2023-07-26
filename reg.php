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
      <?session_start();
      include('header.php');?>
      <div class="registration">
        <div class="container">
            <div class="registration__body">
                <form action="vendor/signup.php" method="post" class="registration_form">
                <h2 style="color:aliceblue;text-align:center;">Регестрация</h2>

                    <input type="text" class="registration__input" name="name" required placeholder="Имя">
                    <input type="text" class="registration__input" name="surname" required placeholder="Фамилия">
                    <input type="text" class="registration__input" name="login" required placeholder="Логин">
                    <input type="email" class="registration__input" name="email" required placeholder="Почта">
                    <input type="text" class="registration__input" name="password" required placeholder="Пароль">
                    <input type="text" class="registration__input" name="password_r" required placeholder="Повторите пароль">
                    <div class="part" style="display: flex;justify-content: flex-start;">
                    <p>
                        <label>
                            <input required type="checkbox" name="check" />
                            <span>Согласие с правилами регистрации</span>
                        </label>
                        </p>
                    <p>
                    </div>
                    <input type="submit" value="Зарегистрироваться" class="registration__submit">
                    <p class="msg" style='text-align:center;color:aliceblue;'> Уже зарегестрированы?<a style="color:blue;" href="./login.php">Войти</a></p>
                    <?if(isset($_SESSION['error'])){
                    echo "<p class ='error' style='color:red';text-align:center;>".$_SESSION['error']."</p>";
                    unset($_SESSION['error']);
                    }?>
                </form>
            </div>
        </div>
    </div>

  </body>
</html>