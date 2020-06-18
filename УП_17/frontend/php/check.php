<?php
session_start();
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$pass2 = filter_var(trim($_POST['pass2']), FILTER_SANITIZE_STRING);

if(mb_strlen($email) < 10 || mb_strlen($email) > 50){
    $_SESSION['error'] = "Email должен быть не менее 10 или не более 50 символов";
    header('Location: ../html/Reges.php');
    exit();
} elseif (mb_strlen($login) < 8 || mb_strlen($login) > 20) {
    $_SESSION['error'] = "Логин должна быть не менее 8 или не более 20 символов ";
    header('Location: ../html/Reges.php');
    exit();
} elseif (mb_strlen($name) < 3 || mb_strlen($name) > 25) {
    $_SESSION['error'] = "Имя должен быть не менее 8 или не более 20 символов ";
    header('Location: ../html/Reges.php');
    exit();
} elseif (mb_strlen($pass) < 8 || mb_strlen($pass) > 20) {
    $_SESSION['error'] = "Пароль должен быть не менее 8 или не более 20 символов ";
    header('Location: ../html/Reges.php');
    exit();
}
$pass = md5($pass);
$pass2 = md5($pass2);

if($pass == $pass2) {

        $mysql = new mysqli("localhost", "root", "", "bez_reg");
        $mysql->query("INSERT INTO `users` (`email`,`login`,`name`,`password`,`role`) VALUE ('$email','$login','$name','$pass','0') ");

        $mysql->close();
        $_SESSION['role'];
        header('Location: ../html/auth.html.php');

} else {
    $_SESSION['message'] = "Не совподают пароли";
    header('Location: ../html/Reges.php');
}
