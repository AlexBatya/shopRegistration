<?php
session_start();
require_once 'connect.php';

$id = $_GET['id'];
mysqli_query($connect, "UPDATE `request` SET
`status`='ОТМЕНЕНО' WHERE `id` = '$id'");


header('Location:../admin.php');