<?php
    setcookie('admin', $user['admin'], time() - 3600, "/");
    setcookie('id',$user['ID'], time() - 3600, "/");
    setcookie('name',$user['name'], time() - 3600, "/");
    setcookie('login',$user['login'], time() - 3600, "/");
    setcookie('pass',$user['password'], time() - 3600, "/");
    setcookie('email',$user['email'], time() - 3600, "/");
    setcookie('surname',$user['Surname'], time() - 3600, "/");

    header('Location: ../lich.php');