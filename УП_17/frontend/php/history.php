<?php
session_start();
$ID = $_POST['ID'];
$user_id = $_POST['user_id'];
$passenger = $_POST['passenger'];

if(!$_COOKIE['id'] == ""){
    $mysql = new mysqli('localhost','root','','bez_reg');
    $result = $mysql->query("INSERT INTO `history` (`Ticketing_id`, `user_id`, `of_id`) VALUE  ('$ID', '$user_id','$passenger')");

    unset($_SESSION['passenger']);
    header('location: ../html/history.html.php');
} else {
    $_SESSION['user_id'] = "Нужно войти в аккаунт.";
    header("location: ../html/lich.php");
}