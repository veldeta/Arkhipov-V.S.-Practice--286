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
            <div class="col-6 col-md-4">
                <form action="../../php/admin.php" class="left">
                    <input type="submit" value="Назад" class="top btn btn-warning" >
                </form>
            </div>
            <div class="col-6 col-md-6">
                <table class="table">
                    <thead>
                    <tr class="table-secondary">
                        <th scope="col">#</th>
                        <th scope="col">e-mail</th>
                        <th scope="col">login</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <? while ($value = $result->fetch_assoc()) : ?>
                        <tbody>
                        <tr class="table-secondary">
                            <th scope="row"><?=$value['ID']?></th>
                            <td><?=$value['email']?></td>
                            <td><?=$value['login']?></td>
                            <td>
                                <form action="code/code_delete.php" method="post">
                                    <input type="hidden" name="ID" value="<?=$value['ID']?>">
                                    <input type="submit"  class="btn btn-danger" value="Удалить">
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    <?endwhile;?>
                </table>
            </div>
            <div class="col-6 col-md-2"></div>
        </div>
    </div>
</body>
</html>
