<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Авиабилеты</title>
	<!-- Подключение jQuery -->
	<script type="text/javascript" src="js/jQuery_v3.5.1.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> 
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
  		$( function() {
   			$( "#datepicker" ).datepicker();
 		} );
  	</script>
  	<script>
  		$( function() {
   			$( "#datepicker1" ).datepicker();
 		} );
  	</script>
	<!-- Подключение CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="Css/css.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<link rel="stylesheet" href="/resources/demos/style.css">

</head>
<body background="img/262730-Sepik.jpg" class="fon">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark form-group " id="exampleFormControlSelect1" >
	    <li>
	        <a id="navbarDropdown"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          <input type="image" src="img/80b47d673aa5e0ca8712e1f1cb95793c.png" name="img" class="rok">
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="html/Avtori.php">Войти</a>
	          <a class="dropdown-item" href="html/Reges.php">Регестрация</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="#">Моя страница в Vk.com</a>
	        </div>
	    </li>
 	 </nav>  
	
	<form action="html/Rez.php">
		<div class="container">
			<div class="row">
		    	<div class="col-6">
					<input type="search" name="Search" placeholder="Откуда" class="Rectangle_2 text">
					<input type="Search" name="Search1" placeholder="Куда" class="Rectangle_1 text">
				</div>
		   		<div class="col-6 ">
		    		<p><input type="text" name="date" id="datepicker"  placeholder="Туда" class="Rectangle_3 btn btn-light"></p>
		    		<p><input type="text" name="date2" id="datepicker1" placeholder="Обратно" class="Rectangle_4 btn btn-light"></p>
					<div class="Rectangle_5 form-group">
					    <select class="form-control" id="exampleFormControlSelect1">
						    <option>1 Пассажир</option>
						    <option>2 Пассажира</option>
						    <option>3 Пассажира</option>
						    <option>4 Пассажира</option>
						    <option>5 Пассажиров</option>
						    <option>6 Пассажиров</option>
						    <option>7 Пассажиров</option>
						    <option>8 Пассажиров</option>
						    <option>9 Пассажиров</option>
					    </select>
					</div>
		    		<div class="Rectangle_6 form-group">
					    <select class="form-control" id="exampleFormControlSelect1">
						    <option>Эконом</option>
						    <option>Комфорт</option>
						    <option>Бизнес</option>
						    <option>Первый класс</option>
					    </select>
					    <input type="submit" name="button" value="Найти" class="btn btn-primary center">				
					</div>
		    	</div>
	  		</div>
  		</div>
	</form>

</body>
</html>