<?php
session_start();
require_once 'connect.php';

$user_id = $_SESSION['user']['id'];
$img = $_FILES['img'];
$title = $_POST['title'];
$text = $_POST['text'];
$path = 'uploads/' . time() . $_FILES['img']['name'];
if (move_uploaded_file($_FILES['img']['tmp_name'], '../' . $path)) {
    move_uploaded_file($_FILES['img']['tmp_name'], '../' . $path);
    mysqli_query($connect, "INSERT INTO `request`(`id`, `img`, `text`, `user_id`, `status`, `price`, `title`)
    VALUES (NULL,'$path','$text','$user_id','НА РАССМОТРЕНИЕ','0','$title')");
    header('Location:../profile.php');
} else {
    $_SESSION['error'] = 'Ошибка с загрузкой изображения';
}



header('Location:../profile.php');