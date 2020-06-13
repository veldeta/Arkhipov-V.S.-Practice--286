<?php
session_start();
if(!$_COOKIE['admin']){
    header('location: ../../index.php');
}

$mysql = new mysqli('localhost','root','','bez_reg');
$result = mysqli_query($mysql,"SELECT * FROM flights");
?>
<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8">
    <title><?=$_COOKIE['admin']?></title>
    <?include '../../Connections/Connections_admin.php'?>
    <link rel="stylesheet" href="../../Css/style.css">
</head>
<body background="../../img/super.ua-1525935571.jpg" class="fon">
<div class="container">
    <div class="row">
        <div class="col-6 col-md-10 gigi">
            <table class="table">
                <thead>
                <tr class="table-secondary">
                    <th scope="col">#</th>
                    <th scope="col">Откуда</th>
                    <th scope="col">Куда</th>
                    <th scope="col">День полёта</th>
                    <th scope="col">Время отправление</th>
                    <th scope="col">Время прибытия</th>
                    <th scope="col">Время полёта</th>
                    <th scope="col">Цена</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <? while ($value = $result->fetch_assoc()) : ?>
                    <tbody>
                    <tr class="table-secondary">
                        <th scope="row"><?=$value['ID']?></th>
                        <td><?=$value['Where from']?></td>
                        <td><?=$value['__Where__']?></td>
                        <td><?=$value['Day']?></td>
                        <td><?=$value['Departure']?></td>
                        <td><?=$value['Arrivals']?></td>
                        <td><?=$value['Time in sky']?></td>
                        <td><?=$value['price']?></td>
                        <td>
                            <form action="code/code_delete.php" method="post" >
                                <input type="hidden" name="ID" value="<?=$value['ID']?>">
                                <input type="submit" value="Удалить" class="btn btn-link">
                            </form>
                        </td>
                    </tr>
                    </tbody>
                <?endwhile;?>
            </table>
        </div>
        <div class="col-6 col-md-2">
            <form action="../../php/admin.php" class="t">
                <input type="submit" value="Назад" class="btn btn-warning">
            </form>
        </div>
    </div>
</div>
</body>
</html>