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
    <title>Личный кабинет</title>
    <? include "../Connections/connect/css/Connections.php" ?>
    <link rel = "stylesheet" href = "../Css/style.css">
</head>
<body background = "../img/fonstola.ru-100829.jpg" class="fon">
    <?php if($_COOKIE['id'] == "") :?>
    <div class="container cen">
        <h1 align="center">Добро пожаловать на планету Земля</h1><br>
        <h2 align="center">Ты у нас тут первый раз? <br> Тогда я тебе предлагаю пройти <a href="Reges.php">регистрацию</a> для дальнейших путешествий!</h2>
        <h2 align="center">А если ты уже бывал у нас, то просто войди в свой <a href="auth.html.php">кабинет</a></h2>
        <h4 align="center">
        <?php
        if($_SESSION['user_id']) {
            echo "<p class='msg g' style='margin-left: 320px; margin-top: 2pc'>".$_SESSION['user_id']."</p>";
            unset($_SESSION['user_id']);
        }
        ?>
        </h4>
    </div>
    <?php else: ?>

        <div class="container">
            <div class="row">
                <div class="col-6 col-md-6">
                        <?if($_SESSION['data'] == true) : ?>
                        <form action="lich.php" method="post" class="for">
                            <div class="form-group col-md-2">
                                <input type="hidden" name="ID"  id="inputZip" class="form-control str" value = "<?= $_COOKIE['id'] ?>" readonly >
                            </div>
                            <br>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="inputEmail3" value = "<?= $_COOKIE['email'] ?>" placeholder="Почта" required>
                                    <br>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" name="login" class="form-control" id="exampleFormControlInput1" value = "<?= $_COOKIE['login'] ?>" placeholder="Логин" required>
                                    <br>
                                </div>
                                <div class="col-sm-10">
                                    <input name="pass" type="password" class="form-control" id="exampleFormControlInput1"  placeholder="Пароль" required>
                                    <br>
                                </div>
                                <div class="col-sm-10">
                                    <input name="name" type="text" class="form-control"  value = "<?= $_COOKIE['name'] ?>" placeholder="Имя" required>
                                    <br>
                                </div>
                                <div class="col-sm-10">
                                    <input name="surname" type="text" class="form-control"  value = "<?= $_COOKIE['surname'] ?>" placeholder="Фамилия" required><br>
                                    <br>
                                </div>
                                <div class="col-sm-10">
                                    <input type="submit" class="btn btn-warning" value="Изменить"/>
                                </div>
                            </div>
                        </form>
                        <div class="col-sm-10">

                        </div>
                        <?endif;?>
                    </div>
                <div class="col-6 col-md-4">
                        <form action="../index.php" method="get" class="for" style="margin-top: 250px">
                            <button type="submit" name="Main page" class="btn btn-success">Главная страница</button><br><br>
                        </form>
                        <form action="../php/warframe.php" method="get" style="margin-left: -90px">
                            <button type="submit" name="data" class="btn btn-warning">Изменить данные</button><br><br>
                        </form>
                        <form action="../php/warframe.php" method="get" style="margin-left: -90px">
                            <button type="submit" name="role" class="btn btn-warning">Измениеть роль</button><br><br>
                        </form>
                        <form action="../php/warframe.php" method="get" style="margin-left: -90px">
                            <button type="submit" name="history" class="btn btn-warning">История</button><br><br>
                        </form>
                        <form action="../php/warframe.php" method="get" style="margin-left: -90px">
                            <button type="submit" name="exit" class="btn btn-danger">Выйти</button>
                        </form>
                        <?if($_SESSION['rol'] == true || $_SESSION['data'] == true):?>
                        <form action="../php/cancel.php" method="get" style="margin-left: -90px; margin-top: 100px">
                            <input type="submit" name="сancel" value="Отмена" class="btn btn-warning">
                        </form>
                        <?endif;?>
                    </div>
                <div class="col-6 col-md-2">
                    <?if($_SESSION['rol'] == true): ?>
                        <p class="role">
                            <?if($_SESSION['role'] == number_format(0)): ?><strong>Статус роли: <br> Новичок.</strong>
                            <?elseif ($_SESSION['role'] == 1): ?><strong>Статус роли: <br>Любитель.</strong>
                            <?elseif ($_SESSION['role'] == 2): ?><strong>Статус роли: <br>Профи.</strong>
                            <?elseif ($_SESSION['role'] == 3): ?><strong>Статус роли: <br>Admin.</strong>
                            <?elseif ($_SESSION['role'] == 4): ?><strong>Статус роли: <br>У вас нет роли.</strong>
                            <?else: ?><strong>Статус роли: <br><?=$_SESSION['role'],'.'?></strong>
                            <?endif;?>
                        </p>
                        <form action="../php/role.php" method="post" class="col">
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
                        <form action="../php/delete.php" method="post" class="col">
                            <input type="hidden" name="ID" value="<?= $_COOKIE['id'] ?>">
                            <button type="submit" name="del" class="btn btn-danger">Удалить роль</button>
                        </form>
                    <?endif;?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <? include "../Connections/connect/js/Connections.php" ?>
</body>
</html>
<?php
if($_POST){
    $ID = $_POST['ID'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];


    $pass = md5($pass);

    if($mysqli->connect_errno){
        printf("Не удалось подключиться с базам данных, попробуйте поже.", $mysqli->connect_error);
    }
    $result = $mysqli->query("UPDATE ".$db_table." SET   `email` = '".$email."', `login`='".$login."',`password`= '".$pass."',`name`= '".$name."',`Surname`='".$surname."' WHERE ID=".$ID);

}
?>