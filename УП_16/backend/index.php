<?php
session_start();

if($_COOKIE['admin']){
    header('location: php/admin.php');
}

$db_host = "localhost";
$db_user = "root"; // Логин БД
$db_password = ""; // Пароль БД
$db_base = 'bez_reg'; // Имя БД
$db_table = "users"; // Имя Таблицы БД

$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);
$result = mysqli_query($mysqli,"SELECT * FROM users");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Meriodasu</title>
    <? include "Connections/Connections_index.php" ?>
    <link rel = "stylesheet" href = "Css/style.css">
</head>
<body background = "img/fonstola.ru-100829.jpg" class="fon">
    <?php if($_COOKIE['id'] == "") :?>
    <div class="container cen">
        <h1 align="center">Добро пожаловать на планету Земля</h1><br>
        <h2 align="center">Ты у нас тут первый раз? <br> Тогда я тебе предлагаю пройти <a href="html/Reges.php">регистрацию</a> для дальнейших путешествий!</h2>
        <h2 align="center">А если ты уже бывал у нас, то просто войди в свой <a href="html/auth.html.php">кабинет</a></h2>
    </div>
    <?php else: ?>
    <div class="container" align="center">
        <h1 align="center">Привет <?=$_COOKIE['name']?>. <br>Добро пожаловать в личный кабинет.</h1>
        <h2 align="center">Ты можешь тут поменять пароль, Имя, написать свою Фамилию, поменять почту и так же логин.</h2>



            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-2"><label for="disabledTextInput" class="str2" ><strong><big> Ваш индивидуальный номер</big></strong></label></div>
                    <div class="col-6 col-md-8">
                        <form action="index.php" method="post" class="for">
                            <fieldset >
                                <div class="form-group row" >
                                    <div class="form-group col-md-2" >

                                        <input type="number" name="ID"  id="inputZip" class="form-control str" value = "<?= $_COOKIE['id'] ?>" readonly >
                                    </div>
                                </div>
                            </fieldset>
                            <br>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="inputEmail3" value = "<?= $_COOKIE['email'] ?>" placeholder="Почта">
                                    <br>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" name="login" class="form-control" id="exampleFormControlInput1" value = "<?= $_COOKIE['login'] ?>" placeholder="Логин">
                                    <br>
                                </div>
                                <div class="col-sm-10">
                                    <input name="pass" type="password" class="form-control" id="exampleFormControlInput1"  placeholder="Пароль">
                                    <br>
                                </div>
                                <div class="col-sm-10">
                                    <input name="name" type="text" class="form-control"  value = "<?= $_COOKIE['name'] ?>" placeholder="Имя">
                                    <br>
                                </div>
                                <div class="col-sm-10">
                                    <input name="surname" type="text" class="form-control"  value = "<?= $_COOKIE['surname'] ?>" placeholder="Фамилия"><br>
                                    <br>
                                </div>
                                <div class="col-sm-10">
                                    <input type="submit" class="btn btn-warning" value="Изменить"/>
                                </div>
                            </div>
                        </form>
                        <form action="php/exit.php" method="post">
                            <button type="submit" class="btn btn-danger sos">Выйти</button>
                        </form>
                    </div>
                    <div class="col-6 col-md-2">
                        <p>
                            <strong>
                                Статус роли: <br>
                                <?=$_SESSION['role']?>.
                            </strong>
                        </p>
                        <form action="php/role.php" method="post" class="col">
                            <div class=" form-group">
                                <select class="form-control" id="exampleFormControlSelect1"   name="role">
                                    <option value="0">Новичок</option>
                                    <option value="1">Любител</option>
                                    <option value="2">Профи</option>
                                </select>
                                <input type="hidden" name="ID" value="<?= $_COOKIE['id'] ?>">
                                <input type="submit" class="btn btn-warning" value="Поменять роль">
                                <?php
                                    if($_SESSION['message']){
                                        echo ' <p class="msg"> ' . $_SESSION['message'] .  ' </p>';
                                    }
                                    unset($_SESSION['message']);
                                ?>
                            </div>
                        </form>
                        <form action="php/delete.php" method="post" class="col">
                            <input type="hidden" name="ID" value="<?= $_COOKIE['id'] ?>">
                            <button type="submit" name="del" class="btn btn-danger">Удалить роль</button>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    <?php endif; ?>

</body>
</html>
<?php

if($_POST)
{
    $ID = $_POST['ID'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];


    $pass = md5($pass);

    if($mysqli->connect_errno)
    {
        printf("Не удалось подключиться с базам данных, попробуйте поже.", $mysqli->connect_error);
    }
    $result = $mysqli->query("UPDATE ".$db_table." SET   `email` = '".$email."', `login`='".$login."',`password`= '".$pass."',`name`= '".$name."',`Surname`='".$surname."' WHERE ID=".$ID);


//    if($result == true)
//    {
//        echo "Изменено";
//    }
//    else
//    {
//        echo "Что-то пошло не так";
//    }
}
?>