<?php
require_once('connect.php');
session_start();
$login = $_POST['login'];
$password = $_POST['password'];
$res = mysqli_query($connect, "SELECT * FROM `users` WHERE `login`='$login' AND `password` = '$password'");
if(mysqli_num_rows($res)==1){
    $user = mysqli_fetch_assoc($res);
    $_SESSION['user'] = [
        "id" => $user['id'],
        "name" => $user['name'],
        "surname" => $user['surname'],
        "login" => $user['login']
    ];
    header("Location: ../index.php");
}
else{
    header("Location: ../login.php");
}



