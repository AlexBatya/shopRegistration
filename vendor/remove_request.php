<?php
	include "connect.php";
    $id = $_GET["id"];
	$result = mysqli_query($connect, "DELETE FROM `request` WHERE `id`='$id'");
	header("Location:../admin.php");