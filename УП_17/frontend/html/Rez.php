<?php
session_start();
$search = $_GET['Search'];
$search1 = $_GET['Search1'];
$date = $_GET['date'];


$arr = explode('/', $date);
$date = $arr[2] .'-'.  $arr[0] .'-'. $arr[1];

$mysql = new mysqli('localhost','root', '','bez_reg');
if(isset($_GET['true'])) {
    $_SESSION['passenger'] = $_GET['passenger'];
    $result = $mysql->query("SELECT * FROM `flights` WHERE `Where from` = '$search' AND `__Where__` = '$search1' AND `Day`='$date'");
}elseif(isset($_GET['button'])) {
    $result = $mysql->query("SELECT * FROM `flights` WHERE `Where from` = '$search' AND `__Where__` = '$search1'");
}elseif(isset($_GET['false'])){
    $result = $mysql->query("SELECT * FROM `flights`");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Авиабилеты</title>
	<?include "../Connections/connect/css/Connections.php" ?>
</head>
<body background="../img/262730-Sepik.jpg" class="fon">
	<?include "top.php"?>
	<div class="container">
  		<div class="row">
		    <div class="col-6">
                <form action="Rez.php" method="get">
                    <input type="search" name="Search" placeholder="Откуда" class="search_2 text"   >
                    <input type="search" name="Search1" placeholder="Куда" class="search_1 text">
                    <input type="submit" name="button" value="Найти" class="btn btn-primary center" style="margin-left: -45%; margin-top: -200px">
                    <input type="submit" name="false" value="Показать все билеты" class="btn btn-success center" style="margin-left: -9%; margin-top: -200px">
                </form>
            </div>
		    <div class="col-6"></div>
  		</div>
 		<div class="row ">
		    <div class="rayt col-12 ">
		    	<table class="table table-hover table-info">
  					<thead>
					    <tr>
					      	<th scope="col"></th>
					     	<th scope="col">Рейс</th>
					     	<th scope="col">Время</th>
					     	<th scope="col">Время в пути</th>
					      	<th scope="col">Число</th>
					      	<th scope="col">Цена</th>
					    </tr>
					</thead>
					<tbody>
                    <? while ($user = $result->fetch_assoc()) :?>
                        <tr>
					      	<th scope="row">
                                <input type="hidden" name="ID" value="<?=$user['ID']?>">
                            </th>
					      	<td><?=$user['Where from']?> --> <?=$user['__Where__']?></td>
                            <td><?=$user['Departure'] ?> --- <?=$user['Arrivals'] ?></td>
                            <td><?=$user['Time in sky'] ?></td>
                            <td><?=$user['Day'] ?></td>
                            <td>
					      		<form action="Ofor.php" method="get">
                                    <input type="hidden" name="ID" value="<?=$user['ID']?>">
                                    <input type="hidden" name="Where_from" value="<?=$user['Where from']?>">
                                    <input type="hidden" name="__Where__" value="<?=$user['__Where__']?>">
                                    <input type="hidden" name="Departure" value="<?=$user['Departure']?>">
                                    <input type="hidden" name="Arrivals" value="<?=$user['Arrivals']?>">
                                    <input type="hidden" name="Time_in_sky" value="<?=$user['Time in sky']?>">
                                    <input type="hidden" name="Day" value="<?=$user['Day']?>">
					      			<button type="submit" name="price" class="btn btn-success button" value="<?=$user['price'] ?>"><?=$user['price'] ?>p.</button>
					      		</form>
					      	</td>
					    </tr>
                    <?endwhile;?>
					</tbody>
				</table>
		    </div>
  		</div>
	</div>
<?include "../Connections/connect/js/Connections.php"?>
</body>
</html>
<?php
$rok = $result->fetch_assoc();
if (count($rok) == 1) {
    $_SESSION['Error'] = 'Не верно ведены данные';
    header('location: ../index.php');
    exit();
}
?>