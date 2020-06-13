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
                            <form action="code/code_change.php" method="get" >
                                <input type="hidden" name="ID" value="<?=$value['ID']?>">
                                <input type="hidden" name="Where_from" value="<?=$value['Where from']?>">
                                <input type="hidden" name="__Where__" value="<?=$value['__Where__']?>">
                                <input type="hidden" name="Day" value="<?=$value['Day']?>">
                                <input type="hidden" name="Departure" value="<?=$value['Departure']?>">
                                <input type="hidden" name="Arrivals" value="<?=$value['Arrivals']?>">
                                <input type="hidden" name="Time_in_sky" value="<?=$value['Time in sky']?>">
                                <input type="hidden" name="price" value="<?=$value['price']?>">
                                <input type="submit" value="Изменить" class="btn btn-link">
                            </form>
                        </td>
                    </tr>
                    </tbody>
                <?endwhile;?>
            </table>
        </div>
        <div class="col-6 col-md-2">
        <?if($_SESSION['ru'] == true) :?>
            <table>
                <td>
                    <form action="code/code_change.php" method="post" class="oil t">
                        <input type="hidden" name="ID" value="<?=$_SESSION['ID']?>">
                        <input type="text" name="W" value="<?=$_SESSION['W']?>" class="form-control" id="exampleFormControlInput1" placeholder="Откуда" required>
                        <input type="text" name="_W_" value="<?=$_SESSION['_W_']?>" class="form-control" id="exampleFormControlInput1" placeholder="Куда" required>
                        <input type="date" name="D" value="<?=$_SESSION['D']?>" class="form-control" id="exampleFormControlInput1" placeholder="День полёта" required>
                        <input type="time" name="Dep" value="<?=$_SESSION['Dep']?>" class="form-control" id="exampleFormControlInput1" placeholder="Время отправление" required>
                        <input type="time" name="Arr" value="<?=$_SESSION['Arr']?>" class="form-control" id="exampleFormControlInput1" placeholder="Время прибытия" required>
                        <input type="time" name="Time" value="<?=$_SESSION['Time']?>" class="form-control" id="exampleFormControlInput1" placeholder="Время полёта" required>
                        <input type="number" name="price" value="<?=$_SESSION['price']?>" class="form-control" id="exampleFormControlInput1" placeholder="Цена" required>
                        <input type="submit" value="Изменить" class="btn btn-warning">
                    </form>

                </td>
                <td>
                    <?php
                    if($_SESSION['admin']) {
                        echo "<p class='msg g'>".$_SESSION['admin']."</p>";
                        unset($_SESSION['admin']);
                    }
                    ?>
                </td>
            </table>
        <?endif;?>
            <form action="code/back.php" class="t">
                <input type="submit" value="Назад" class="btn btn-warning">
            </form>
        </div>
    </div>
</div>
</body>
</html>