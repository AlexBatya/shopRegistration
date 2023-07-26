<?php
session_start();
require_once 'connect.php';

$id = $_GET['id'];

mysqli_query($connect, "UPDATE `request` SET
`status`='ОТРЕМОНИРОВАННО' WHERE`id` = '$id'");


header('Location:../admin.php');