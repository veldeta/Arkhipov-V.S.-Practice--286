<?php

$email = $_POST['email'];
$login = $_POST['login'];
$pass = $_POST['password'];

$pass = md5($pass);
$mysql = new mysqli('localhost', 'root', '', 'bez_reg');
$result = $mysql->query("INSERT INTO `users` (`email`, `login`, `password`, `name`, `role`) VALUE ('$email','$login','$pass','NULL','4')");
header('location: ../create.php');
