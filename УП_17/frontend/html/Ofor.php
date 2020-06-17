<?php
session_start();
$ID = $_GET['ID'];
$Wherefrom = $_GET['Where_from'];
$__Where__ = $_GET['__Where__'];
$Departure = $_GET['Departure'];
$Arrivals = $_GET['Arrivals'];
$Time_in_sky = $_GET['Time_in_sky'];
$Day = $_GET['Day'];
$price = $_GET['price'];

$mysql = new mysqli('localhost','root','','bez_reg');
$result = $mysql->query("SELECT * FROM `flights`");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Оформление билета</title>
    <?include "../Connections/connect/css/Connections.php"?>
</head>
<body background="../img/262730-Sepik.jpg" class="fon">
<?include "top.php"?>
	<div class="container">
		<div class="row">
    		<div class="col-12">
    			<div class="list-group tbl">
  					<button type="button" class="list-group-item list-group-item-action active" disabled>
					    Оформление покупки авиабилета
					</button>
					<button type="button" class="list-group-item list-group-item-action" disabled>
						<div class="row">
		    				<div class="col-12">
		    					<table class="table">
	  								<thead>
						    			<tr>
									      	<th scope="col"></th>
									     	<th scope="col">Рейс</th>
									     	<th scope="col">Время</th>
									     	<th scope="col">Время в пути</th>
									      	<th scope="col">Число</th>
                                            <th scope="col">Пассажиры</th>
									      	<th scope="col">Цена</th>
						   			 	</tr>
									</thead>
									<tbody>
						    			<tr>
								    	  	<th scope="row">
                                                <input type="hidden" name="ID" value="<?=$ID?>">
                                            </th>
								     	 	<td><?=$Wherefrom ?> ---> <?=$__Where__?></td>
                                            <td><?=$Departure ?> --- <?=$Arrivals?></td>
                                            <td><?=$Time_in_sky?></td>
                                            <td><?=$Day?></td>
                                            <td><?=$_SESSION['passenger']?></td>
                                            <td><?=$price ?>p.</td>
						    			</tr>
									</tbody>
								</table>
		    				</div>
  						</div>
  						<p align="center" class="kur"><i>При оформление билета, мы можете его забрать и оплатить в аэропорте города</i></p>
					</button>
					<button type="button" class="list-group-item list-group-item-action">
						<form action="../php/history.php" method="post">
                            <input type="hidden" name="user_id" value="<?=$_COOKIE['id']?>">
                            <input type="hidden" name="passenger" value="<?=$_SESSION['passenger']?>">
                            <input type="hidden" name="ID" value="<?=$ID?>">
                            <input type="submit" name="of" value="Оформить билет" class="btn btn-success btn_1">
	  					</form>
	  				</button>
				</div>
    		</div>
 		</div>
	</div>
<?include "../Connections/connect/js/Connections.php"?>
</body>
</html>