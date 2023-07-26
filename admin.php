<?
require_once('vendor/connect.php');
session_start();
$id = $_SESSION['user']['id'];
$result = mysqli_query($connect, "SELECT * FROM `request` WHERE `status`= 'НА РАССМОТРЕНИЕ'");
$product = array();
while ($productInfo = mysqli_fetch_assoc($result)) {
    $product[] = $productInfo;
}
$result = mysqli_query($connect, "SELECT * FROM `request` WHERE `status`= 'РЕМОНИТИРУЕТЬСЯ'");
$product1 = array();
while ($productInfo = mysqli_fetch_assoc($result)) {
    $product1[] = $productInfo;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Регестрация</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="js/materialize.min.css">
</head>
<body class="body-main">
    <?include('header.php');?>
    <div class="admin">
        <div class="container">
            <div class="admin__body"> 
                <h5 style="color:aliceblue;">Модерация завок</h5>
                <div class="completed__body">
                    <? foreach ($product as $productInfo) : ?>
                        <form method="post" action="vendor/accept_request.php?id=<?=$productInfo['id']?>" class="completed__item admin__item">
                            <img src="<?=$productInfo['img']?>" alt="" class="completed__img admin__img">
                            <div class="completed__about">
                                <div class="completed__title"><?=$productInfo['title']?></div>
                                <div class="completed__text"><?=$productInfo['text']?></div>
                                <input type="num" style="color:black;" name="price" required placeholder="Цена">
                                <input type="submit" class="admin__submit" value="Принять">
                                <a href="vendor/decline_request.php?id=<?=$productInfo['id']?>" class="admin__decline">Отменить</a>
                            </div>
                        </form>
                    <? endforeach ?>
                </div>
                <h5 style="color:aliceblue;">Модерация ремонтов</h5>
                <div class="completed__body">
                    <? foreach ($product1 as $productInfo) : ?>
                        <div class="admin__item">
                            <img src="<?=$productInfo['img']?>" alt="" class="completed__img admin__img">
                            <div class="completed__about">
                                <div class="completed__title"><?=$productInfo['title']?></div>
                                <div class="completed__text"><?=$productInfo['text']?></div>
                                <div class="completed__text">Цена: <?=$productInfo['price']?></div>
                                <a href="vendor/remont_request.php?id=<?=$productInfo['id']?>" style="color:orange;">Починить</a>
                            </div>
                        </div>
                    <? endforeach ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>