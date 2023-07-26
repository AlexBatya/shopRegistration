<nav>
    <div class="nav-wrapper" style="background: rgb(46,130,131);
background: linear-gradient(45deg, rgba(46,130,131,1) 0%, rgba(34,56,121,1) 100%);">
      <div class="container">
        <a href="#!" class="brand-logo">РемТрон</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"
          ><i class="material-icons">menu</i></a
        >
        <ul class="right hide-on-med-and-down">
        <li ><a href="index.php">Главная</a></li>
          <li ><a href="completed.php">О нас</a></li>
          <?
          if(isset($_SESSION['user'])){
            echo '<li><a href="create_req.php" style="color:chartreuse;">Заказать ремонт</a></li>';
            echo '<li ><a href="profile.php">Профиль</a></li>';
          }
          else{
            echo '<li ><a href="login.php">Войти</a></li>';
          }
          if($_SESSION['user']['login']=='admin'){
            echo '<li><a href="admin.php">Админ</a></li>';
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>