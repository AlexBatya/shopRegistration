<?php
session_start();
require_once 'connect.php';

$id = $_GET['id'];
$price = $_POST['price'];

mysqli_query($connect, "UPDATE `request` SET
`status`='РЕМОНИТИРУЕТЬСЯ',`price`='$price' WHERE  `id` = '$id'");


header('Location:../admin.php');