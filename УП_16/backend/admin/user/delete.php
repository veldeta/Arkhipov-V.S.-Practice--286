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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?= $_COOKIE['admin']?></title>
    <? include "../../Connections/connect/css/Connections_admin.php" ?>
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
                                    <form action="code/code_delete.php" method="post">
                                        <input type="hidden" name="ID" value="<?=$value['ID']?>">
                                        <input type="submit"  class="btn btn-danger" value="Удалить">
                                    </form>
                                </td>
                            </tr>
                            <?endwhile;?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-6 col-md-2"></div>
        </div>
    </div>
    <?include "../../Connections/connect/js/Connections_admin.php";?>
</body>
</html>
