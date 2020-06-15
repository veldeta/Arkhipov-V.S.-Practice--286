<?php
session_start();
if($_GET){
    $_SESSION['ru'] = true;
    $_SESSION['ID'] = $_GET['ID'];
    $_SESSION['email'] = $_GET['email'];
    $_SESSION['login'] = $_GET['login'];
    $_SESSION['password'] = $_GET['password'];

    header('location: ../change.php');
}
if($_POST){
    $id = $_POST['ID'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $pass = $_POST['password'];

    $mysql = new mysqli('localhost','root','','bez_reg');


    $pass = md5($pass);


    $result = $mysql->query("UPDATE `users` SET   `email` = '".$email."', `login`='".$login."',`password`= '".$pass."' WHERE ID=".$id);
    if($result == true){
        unset($_SESSION['ru']);
        header('location: ../change.php');
        exit();
    }else{
        unset($_SESSION['ru']);
        header('location: ../change.php');
        exit();
    }
}


