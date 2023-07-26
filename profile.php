<?
require_once('vendor/connect.php');
session_start();
$id = $_SESSION['user']['id'];
$result = mysqli_query($connect, "SELECT * FROM `request` WHERE `user_id`='$id'");
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
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Регестрация</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="js/materialize.min.css">
</head>
<body class="body-main">
    <?include('header.php');?>
    <div class="profile">
        <div class="container">
            <div class="profile__body"> 
                <div style="display: flex;justify-content: space-between;align-items:center;"><h5>Привет <?=$_SESSION['user']['name']?> <?=$_SESSION['user']['surname']?></h5> <a href="vendor/logout.php" style="color:red">Выйти</a></div>
                <fieldset>
                    <legend>Ваши заявки</legend>
                    <table>
                    <thead>
                    <tr>
                        <th>Название</th>
                        <th>Статус</th>
                        <th>Цена</th>
                    </tr>
                    </thead>

                    <tbody>
                    <? foreach ($product as $productInfo) : ?>
                    <tr>
                        <td><?=$productInfo['title']?></td>
                        <td><?=$productInfo['status']?></td>
                        <td><?=$productInfo['price']?></td>
                    </tr>
                    <? endforeach ?>
                    </tbody>
                </table>
                </fieldset>

        </div>
    </div>
</body>
</html>