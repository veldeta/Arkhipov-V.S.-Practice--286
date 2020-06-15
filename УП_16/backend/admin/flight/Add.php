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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?=$_COOKIE['admin']?></title>
    <? include "../../Connections/connect/css/Connections_admin.php" ?>
    <link rel="stylesheet" href="../../Css/style.css">
</head>
<body background="../../img/super.ua-1525935571.jpg" class="fon">
<div class="container">
    <div class="row">
        <div class="col-6 col-md-8 gigi">
            <div class="form-group pull-right">
                <input type="text" class="search form-control"  id="exampleFormControlInput1" placeholder="Поиск" >
            </div>
            <span class="counter pull-right"></span>
            <div class="results">
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
                    </tr>
                    </thead>
                    <tbody>
                        <tr class="warning no-result table-secondary">
                            <td colspan="12"><i class="fa fa-frown-o"></i>&nbsp; Нет данных</td>
                        </tr>
                        <? while ($value = $result->fetch_assoc()) : ?>
                        <tr class="table-secondary">
                            <th scope="row"><?=$value['ID']?></th>
                            <td><?=$value['Where from']?></td>
                            <td><?=$value['__Where__']?></td>
                            <td><?=$value['Day']?></td>
                            <td><?=$value['Departure']?></td>
                            <td><?=$value['Arrivals']?></td>
                            <td><?=$value['Time in sky']?></td>
                            <td><?=$value['price']?></td>
                        </tr>
                        <?endwhile;?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-6 col-md-4">
           <table>
                <td>
                    <form action="code/code_add.php" method="post" class="oil t">
                        <input type="text" name="W" class="form-control" id="exampleFormControlInput1" placeholder="Откуда" required>
                        <input type="text" name="_W_" class="form-control" id="exampleFormControlInput1" placeholder="Куда" required>
                        <input type="date" name="D" class="form-control" id="exampleFormControlInput1" placeholder="День полёта" required>
                        <input type="time" name="Dep" class="form-control" id="exampleFormControlInput1" placeholder="Время отправление" required>
                        <input type="time" name="Arr" class="form-control" id="exampleFormControlInput1" placeholder="Время прибытия" required>
                        <input type="time" name="Time" class="form-control" id="exampleFormControlInput1" placeholder="Время полёта" required>
                        <input type="number" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Цена" required>
                        <input type="submit" value="Отправить" class="btn btn-warning">
                    </form>
                    <form action="../../php/admin.php" class="t">
                        <input type="submit" value="Назад" class="btn btn-warning">
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
        </div>
    </div>
</div>
<?include "../../Connections/connect/js/Connections_admin.php";?>
</body>
</html>