<?php
if(!$_COOKIE['admin']){
    header('location: ../../index.php');
}
    $mysql = new mysqli('localhost', 'root', '', 'bez_reg');
    $result = mysqli_query($mysql, "SELECT * FROM users");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $_COOKIE['admin']?></title>
    <? include "../../Connections/Connections_admin.php" ?>
    <link rel = "stylesheet" href = "../../Css/style.css">
</head>
<body background="../../img/super.ua-1525935571.jpg" class="fon">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-4"></div>
            <div class="col-6 col-md-4">
                <form action="code/code_create.php" method="post" class="oil">
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Почта">
                    <input type="text" name="login" class="form-control" id="exampleFormControlInput1" placeholder="Логин">
                    <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Пароль">
                    <input type="submit"  class="top btn btn-warning" value="Создать">
                </form>
                <form action="../../php/admin.php" class="left">
                    <input type="submit" value="Назад" class="top btn btn-warning" >
                </form>
            </div>
            <div class="col-6 col-md-4">
                <table class="table">
                    <thead>
                        <tr class="table-secondary">
                            <th scope="col">#</th>
                            <th scope="col">e-mail</th>
                            <th scope="col">login</th>
                        </tr>
                    </thead>
                    <? while ($value = $result->fetch_assoc()) : ?>
                    <tbody>
                        <tr class="table-secondary">
                            <th scope="row"><?=$value['ID']?></th>
                            <td><?=$value['email']?></td>
                            <td><?=$value['login']?></td>
                        </tr>
                    </tbody>
                    <?endwhile;?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

