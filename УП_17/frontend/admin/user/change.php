<?php
session_start();
if(!$_COOKIE['admin']){
    header('location: ../../lich.php');
}

$mysql = new mysqli('localhost', 'root', '', 'bez_reg');
$result = mysqli_query($mysql, "SELECT * FROM users");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?= $_COOKIE['admin']?></title>
    <? include "../../Connections/connect/css/Connections_admin.php" ?>
    <link rel = "stylesheet" href = "../Css/style.css">
</head>
<body background="../../img/super.ua-1525935571.jpg" class="fon">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-4"></div>
            <div class="col-6 col-md-4">
                <?if($_SESSION['ru'] == true) :?>
                <form action="code/code_change.php" method="post" class="oil">
                    <input type="hidden" name="ID" value="<?=$_SESSION['ID']?>">
                    <input type="email" name="email" value="<?=$_SESSION['email']?>" class="form-control" id="exampleFormControlInput1" placeholder="Почта">
                    <input type="text" name="login" value="<?=$_SESSION['login']?>" class="form-control" id="exampleFormControlInput1" placeholder="Логин">
                    <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Пароль">
                    <input type="submit"  class="top btn btn-warning" value="Изменить">
                </form>
                <?endif;?>
                <form action="code/back.php" class="left">
                    <input type="submit" value="Назад" class="top btn btn-warning" >
                </form>
            </div>
            <div class="col-6 col-md-4">
                <div class="form-group pull-right">
                    <input type="text" class="search form-control"  id="exampleFormControlInput1" placeholder="Поиск" >
                </div>
                <span class="counter pull-right"></span>
                <div class="results">
                    <table class="table">
                        <thead>
                            <tr class="table-secondary">
                                <th scope="col">#</th>
                                <th scope="col">e-mail</th>
                                <th scope="col">login</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr class="warning no-result table-secondary">
                            <td colspan="12"><i class="fa fa-frown-o"></i>&nbsp; Нет данных</td>
                        </tr>
                        <? while ($value = $result->fetch_assoc()) : ?>
                            <tr class="table-secondary">
                                <th scope="row"><?=$value['ID']?></th>
                                <td><?=$value['email']?></td>
                                <td><?=$value['login']?></td>
                                <td>
                                    <form action="code/code_change.php" method="get" >
                                        <input type="hidden" name="ID" value="<?=$value['ID']?>">
                                        <input type="hidden" name="email" value="<?=$value['email']?>">
                                        <input type="hidden" name="login" value="<?=$value['login']?>">
                                        <input type="hidden" name="password" value="<?=$value['password']?>">
                                        <input type="submit" value="Изменить" class="btn btn-link">
                                    </form>
                                </td>
                            </tr>
                        <?endwhile;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?include "../../Connections/connect/js/Connections_admin.php";?>
</body>
</html>
