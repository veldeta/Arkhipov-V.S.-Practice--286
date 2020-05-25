<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Регистрация</title>
	<?include "../Connections/Connections.php" ?>
</head>
<body background="../img/262730-Sepik.jpg" class="fon">
	<?include "top.php" ?>
	<div class="container">
  		<div class="row">
		    <div class="col"></div>
		    <div class="col">
		     	<form action="../index.php" class="up">
		     		<div class="form-group">
					  <p align="Center">  <label for="exampleFormControlInput1"><big><big><big>Регистрация</big></big></big></label></p>
					    <input type="email" name="E-mail" class="form-control" id="exampleFormControlInput1" placeholder="e-mail" required>
  					</div>
  					<div class="form-group">
					    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Имя" required>
  					</div>
  					<div class="form-group">
					    <input type="text" name="surname" class="form-control" id="exampleFormControlInput1" placeholder="Фамилия" required>
  					</div>
					<div class="form-group">
					    <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Пароль" required>
  					</div>
  					<div class="form-group">
					    <input type="password" name="password2" class="form-control" id="exampleFormControlInput1" placeholder="Повторите пароль" required>
  					</div>
					<input type="submit" name="submit" value="Зарегистрироваться" class="btn btn-primary sub">
				</form>
		    </div>
		    <div class="col"></div>
	 	</div>
	</div>

</body>
</html>