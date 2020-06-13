<?php
    $id = $_POST['ID'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $pass = $_POST['password'];

    $mysql = new mysqli('localhost', 'root', '', 'bez_reg');

    $pass = md5($pass);

    $result = $mysql->query("UPDATE `users` SET   `email` = '".$email."', `login`='".$login."',`password`= '".$pass."' WHERE ID=".$id);
    header('location: ../change.php');


