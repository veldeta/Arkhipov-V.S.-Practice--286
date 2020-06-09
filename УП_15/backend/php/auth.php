<?php
session_start();
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass);

$mysql = new mysqli("localhost","root","","bez_reg");

if($login == './admin/.ad' || $login == './admin/.ab' || $login == './admin/.gb'){
    $result = $mysql->query("SELECT * FROM `admin` WHERE `admin` = '$login' AND `Password` = '$pass'") ;
    $user = $result->fetch_assoc();
    if (count($user) == 0) {
        $_SESSION['message'] = 'Пользователя ' . $login . ', не существует или не верный пароль.';
        header('location: ../html/auth.html.php');
        exit();
    }

    setcookie('admin',$user['admin'], time() + 3600, "/");
    $mysql->close();

    header('location: admin.php');
} else {
    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pass'");
    $user = $result->fetch_assoc();
    if (count($user) == 0) {
        $_SESSION['message'] = 'Пользователя ' . $login . ', не существует или не верный пароль.';
        header('location: ../html/auth.html.php');
        exit();
    }

    setcookie('id', $user['ID'], time() + 3600, "/");
    setcookie('name', $user['name'], time() + 3600, "/");
    setcookie('login', $user['login'], time() + 3600, "/");
    setcookie('pass', $user['password'], time() + 3600, "/");
    setcookie('email', $user['email'], time() + 3600, "/");
    setcookie('surname', $user['Surname'], time() + 3600, "/");
    $_SESSION['role'];
    $mysql->close();

    header('Location: ../index.php');
}