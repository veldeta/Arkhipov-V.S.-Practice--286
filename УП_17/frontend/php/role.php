<?php
session_start();
$db_host = "localhost";
$db_user = "root"; // Логин БД
$db_password = ""; // Пароль БД
$db_base = 'bez_reg'; // Имя БД
$db_table = "users"; // Имя Таблицы БД

$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);
$result = mysqli_query($mysqli,"SELECT * FROM users");

switch ($_POST['role']){
    case '0':
        $ID = $_POST['ID'];
        $role = 'Новичок';
        if($mysqli->connect_errno){
            printf("Не удалось подключиться с базам данных, попробуйте поже.", $mysqli->connect_error);
        }
        $result = $mysqli->query("UPDATE ".$db_table." SET `role`= '0' WHERE ID=".$ID);
        unset($_SESSION['role']);
        $_SESSION['role'] = $role;
        $_SESSION['message'] = "Вы поменяли роль";
        header('Location: ../html/lich.php');
        break;
    case '1':
        $ID = $_POST['ID'];
        $role = 'Любитель';
        if($mysqli->connect_errno){
            printf("Не удалось подключиться с базам данных, попробуйте поже.", $mysqli->connect_error);
        }
        $result = $mysqli->query("UPDATE ".$db_table." SET `role`= '1' WHERE ID=".$ID);
        unset($_SESSION['role']);
        $_SESSION['role'] = $role;
        $_SESSION['message'] = "Вы поменяли роль";
        header('Location: ../html/lich.php');
        break;
    case '2':
        $ID = $_POST['ID'];
        $role = 'Профи';
        if($mysqli->connect_errno){
            printf("Не удалось подключиться с базам данных, попробуйте поже.", $mysqli->connect_error);
        }
        $result = $mysqli->query("UPDATE ".$db_table." SET `role`= '2' WHERE ID=".$ID);
        unset($_SESSION['role']);
        $_SESSION['role'] = $role;
        $_SESSION['message'] = "Вы поменяли роль";
        header('Location: ../html/lich.php');
        break;
    case '3':
        $ID = $_POST['ID'];
        $role = 'Admin';
        if($mysqli->connect_errno){
            printf("Не удалось подключиться с базам данных, попробуйте поже.", $mysqli->connect_error);
        }
        $result = $mysqli->query("UPDATE".$db_table."SET `role`= '3' WHERE ID=".$ID);
        unset($_SESSION['role']);
        $_SESSION['role'] = $role;
        $_SESSION['message'] = "Вы поменяли роль";
        header('Location: ../html/lich.php');
        break;
}