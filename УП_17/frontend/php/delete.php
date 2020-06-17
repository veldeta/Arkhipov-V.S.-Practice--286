<?php
session_start();

$ID = $_POST['ID'];
$role = "У вас нет роли";
$mysql = new mysqli('localhost', 'root', '', 'bez_reg');
$mysql->query("UPDATE `users` SET `role`= '4' WHERE ID=". $ID);

$_SESSION['role'] = $role;
$_SESSION['message'] = 'Вы удалили роль';
header('location: ../html/lich.php');
