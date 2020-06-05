<?php
    session_start();
?>
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
		     	<form action="../php/auth.php" method="post" class="topup">
		     		<div class="form-group">
					  <p align="Center">  <label for="exampleFormControlInput1"><big><big><big>Войти в аккаунт</big></big></big></label></p>
					    <input type="text" name="login" class="form-control" id="exampleFormControlInput1" placeholder="Логин" required>
  					</div>
					<div class="form-group">
					    <input type="password" name="pass" class="form-control" id="exampleFormControlInput1" placeholder="Пароль" required>
  					</div>
                    <h6 align="center">Если нет аккаунта, <a href="Reges.php">разегистрируйся.</a></h6><br>
                    <p>
                        <?php
                        if($_SESSION['message']){
                            echo ' <p class="msg"> ' . $_SESSION['message'] .  ' </p>';
                        }
                        unset($_SESSION['message']);
                        ?>
                    </p>
					<input type="submit" name="submit" value="Войти" class="btn btn-primary sub">
				</form>

		    </div>
		    <div class="col"></div>
	 	</div>
	</div>
</body>
</html>
