<?
require_once('vendor/connect.php');
session_start();
$result = mysqli_query($connect, "SELECT * FROM `request` WHERE `status`='ОТРЕМОНИРОВАННО' ORDER BY `id` DESC LIMIT 15");
$product = array();
while ($productInfo = mysqli_fetch_assoc($result)) {
    $product[] = $productInfo;
}
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
    <div class="completed">
        <div class="container">
            <h2 style="color:aliceblue;text-align:center;">Наши выполненые заказы</h2>
            <div class="completed__body">
            <? foreach ($product as $productInfo) : ?>
                <div class="completed__item">
                    <img src="<?=$productInfo['img']?>" alt="" class="completed__img">
                    <div class="completed__about">
                        <div class="completed__title"><?=$productInfo['title']?></div>
                        <div class="completed__price"><?=$productInfo['price']?>рублей</div>
                    </div>
                </div>
            <? endforeach ?>
            </div>
        </div>
    </div>
  </body>
</html>