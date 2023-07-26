<?php
	require_once('connect.php');
	session_start();
    // Получаем данные из формы
    $username = $_POST['name'];
	$surname = $_POST['surname'];
	$login = $_POST['login'];
    $password = $_POST['password'];
	$password_r = $_POST['password_r'];
    $email = $_POST['email'];




 
	if ($password==$password_r) {
		$query = "SELECT * FROM users WHERE email = '$email'";
		$result = mysqli_query($connect,$query);
		if ($result->num_rows > 0) {
			// Пользователь с таким email уже существует
			$_SESSION["error"]='Пользователь с таким email уже существует';
			header("Location:../reg.php");
		}
		else{
		// Проверяем, существует ли уже пользователь с таким логином
		$query = "SELECT * FROM users WHERE login = '$login'";
		$result = mysqli_query($connect,$query);
		if ($result->num_rows > 0) {
			// Пользователь с таким логином уже существует
			$_SESSION["error"]='Пользователь с таким логином уже существует';
			header("Location:../reg.php");
		} else {
			
			// Добавляем пользователя в базу данных
			$query = "INSERT INTO `users`(`id`, `name`, `surname`, `login`, `email`, `password`) 
			VALUES (NULL,'$username','$surname','$login','$email','$password')";
			mysqli_query($connect,$query);
			// Выводим сообщение об успешной регистрации
			$_SESSION["success"]='Вы успешно зарегистрировались';
			header("Location:../login.php");
		}
		}

	}
	else{
		$_SESSION["error"]='Пароли не совпадаюn';
		header("Location:../reg.php");
	}

