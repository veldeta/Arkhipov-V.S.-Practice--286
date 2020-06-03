<?php
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$pass2 = filter_var(trim($_POST['pass2']), FILTER_SANITIZE_STRING);

if(mb_strlen($email) < 10 || mb_strlen($email) > 50){
    echo "Email должен быть не менее 10 или не более 50 символов";
    exit();
} elseif (mb_strlen($login) < 8 || mb_strlen($login) > 20) {
    echo "Логин должна быть не менее 8 или не более 20 символов ";
    exit();
} elseif (mb_strlen($name) < 3 || mb_strlen($name) > 25) {
    echo "Имя должен быть не менее 8 или не более 20 символов ";
    exit();
} elseif (mb_strlen($pass) < 8 || mb_strlen($pass) > 20) {
    echo "Пароль должен быть не менее 8 или не более 20 символов ";
    exit();
}
$pass = md5($pass);
$pass2 = md5($pass2);

if($pass == $pass2) {
    $mysql = new mysqli("localhost", "root", "", "bez_reg");
    $mysql->query("INSERT INTO `users` (`email`,`login`,`name`,`password`) VALUE ('$email','$login','$name','$pass') ");

    $mysql->close();

    header('Location: ../html/auth.html.php');
} else {
    echo "Пароль должен совподать";
    print "<form action = \"../html/Reges.php \">";
    print "<input type=\"submit\" value=\"Назад\">";
    print "</form>";
}
