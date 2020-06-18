<?php
session_start();

if($_COOKIE['admin']){
    header('location: ../php/admin.php');
} elseif ($_COOKIE['name']){
    header('location: ../lich.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Регистрация</title>
	<? include "../Connections/connect/css/Connections.php" ?>
</head>
<body background="../img/262730-Sepik.jpg" class="fon">
	<? include "top.php" ?>
	<div class="container">
  		<div class="row">
		    <div class="col"></div>
		    <div class="col">
		     	<form action="../php/check.php" method="post" class="up">
		     		<div class="form-group">
					  <p align="Center">  <label for="exampleFormControlInput1"><big><big><big>Регистрация</big></big></big></label></p>
					    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="e-mail" required>
  					</div>
                    <div class="form-group">
                        <input type="text" name="login" class="form-control" id="exampleFormControlInput1" placeholder="Логин" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Имя" required>
                    </div>
					<div class="form-group">
					    <input type="password" name="pass" class="form-control" id="exampleFormControlInput1" placeholder="Пароль" required>
  					</div>
  					<div class="form-group">
					    <input type="password" name="pass2" class="form-control" id="exampleFormControlInput1" placeholder="Повторите пароль" required>
  					</div>
                    <h6 align="center">Если у тебя уже есть аккаунт, то <a href="auth.html.php">войди.</a></h6><br>

                        <?php
                            if($_SESSION['message']){
                              echo ' <p class="mgs g"> ' . $_SESSION['message'] .  ' </p>';
                            }
                            unset($_SESSION['message']);
                        ?>


					<input type="submit" name="submit" value="Зарегистрироваться" class="btn btn-primary sub">
				</form>

		    </div>
		    <div class="col">
                <?php
                    if($_SESSION['error']){
                        echo ' <p class="mgs g" style="margin-top: 17pc"> ' . $_SESSION['error'] .  ' </p>';
                    }
                    unset($_SESSION['error']);
                ?>
            </div>
	 	</div>
	</div>

    <? include "../Connections/connect/js/Connections.php" ?>
</body>
</html>