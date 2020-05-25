<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Оформление билета</title>
	<?include "../Connections/Connections.php" ?>
</head>
<body background="../img/262730-Sepik.jpg" class="fon">
<?include "top.php"?>
	<div class="container">
		<div class="row">
    		<div class="col-12">
    			<div class="list-group tbl">
  					<button type="button" class="list-group-item list-group-item-action active">
					    Оформление покупки авиабилета
					</button>
					<button type="button" class="list-group-item list-group-item-action" disabled>
						<div class="row ">
		    				<div class="col-12">
		    					<table class="table">
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
						    			<tr>
								    	  	<th scope="row"></th>
								     	 	<td>Санкт-Петербург - Москва</td> <td>23:59 - 1:30</td> <td>1:31</td> <td>25 Мая</td> <td>2 999p</td>
						    			</tr>
									</tbody>
								</table>
		    				</div>
  						</div>
  						<p align="center" class="kur"><i>При оформление билета, мы можете его забрать и оплатить в аэропорте города</i></p>
					</button>
					<button type="button" class="list-group-item list-group-item-action">
						<form action="">
	  						<input type="submit" name="pop" value="Оформить билет" class="btn btn-success btn_1">
	  					</form>
	  				</button>
				</div>
    		</div>
 		</div>
	</div>
</body>
</html>