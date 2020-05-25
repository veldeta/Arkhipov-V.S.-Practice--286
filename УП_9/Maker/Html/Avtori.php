<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Авторизация</title>
	<?include "../Connections/Connections.php" ?>
</head>
<body background="../img/262730-Sepik.jpg" class="fon">
	<?include "top.php" ?>
  	<div class="container">
  		<div class="row">
		    <div class="col"></div>
		    <div class="col">
		     	<form action="../index.php" class="topup">
		     		<div class="form-group">
					  <p align="Center">  <label for="exampleFormControlInput1"><big><big><big>Войти в аккаунт</big></big></big></label></p>
					    <input type="email" name="E-mail" class="form-control" id="exampleFormControlInput1" placeholder="e-mail" required>
  					</div>
					<div class="form-group">
					    <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Пароль" required>
  					</div>
					<input type="submit" name="submit" value="Войти" class="btn btn-primary sub">
				</form>
		    </div>
		    <div class="col"></div>
	 	</div>
	</div>
</body>
</html>
