<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Авиабилеты</title>
	<?include "../Connections/connections.php" ?>
</head>
<body background="../img/262730-Sepik.jpg" class="fon">
	<?include "top.php"?>
	<div class="container">
  		<div class="row">
		    <div class="col-6">
		    	<input type="search" name="Search" placeholder="Откуда" class="search_2 text">
				<input type="search" name="Search1" placeholder="Куда" class="search_1 text">
			</div>
		    <div class="col-6"></div>
  		</div>
 		<div class="row ">
		    <div class="rayt col-12 ">
		    	<table class="table table-hover table-info">
  					<thead>
					    <tr>
					      	<th scope="col">#</th>
					     	<th scope="col">Рейс</th>
					     	<th scope="col">Время</th>
					     	<th scope="col">Время в пути</th>
					      	<th scope="col">Число</th>
					      	<th scope="col">Цена</th>
					    </tr>
					</thead>
					<tbody>
					    <tr>
					      	<th scope="row">1</th>
					      	<td>Санкт-Петербург - Москва</td> <td>23:59 - 1:30</td> <td>1:31</td> <td>25 Мая</td> 
					      	<td>
					      		<form action="Ofor.php">
					      			<button type="submit" class="btn btn-success button">2 999p</button>
					      		</form>
					      	</td>
					    </tr>
					</tbody>
				</table>
		    </div>
  		</div>
	</div>

</body>
</html>