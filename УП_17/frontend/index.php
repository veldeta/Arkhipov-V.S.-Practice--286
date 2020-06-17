<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Авиабилеты</title>
    <? include "Connections/connect/css/Connections_index.php"?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <?include "Connections/connect/js/Connections_index.php"?>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        } );
    </script>
</head>
<body background="img/262730-Sepik.jpg" class="fon">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark form-group " id="exampleFormControlSelect1" >
	    <li>
	        <a id="navbarDropdown"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          <input type="image" src="img/80b47d673aa5e0ca8712e1f1cb95793c.png" name="img" class="rok">
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="html/lich.php">Личный кабинет</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="#">Моя страница в Vk.com</a>
	        </div>
	    </li>
 	 </nav>
        <tbody>
            <?php
            if($_SESSION['in_re']) {
                echo "<p class='msg g'>".$_SESSION['in_re']."</p>";
                unset($_SESSION['in_re']);
            }
            ?>
            <?php
            if($_SESSION['Error']) {
                echo "<p class='msg g'>".$_SESSION['Error']."</p>";
                unset($_SESSION['Error']);
            }
            ?>
        </tbody>
        <tbody>
            <form action="html/Rez.php" method="get">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <input type="search" name="Search" placeholder="Откуда" class="Rectangle_2 text" required>
                            <input type="Search" name="Search1" placeholder="Куда" class="Rectangle_1 text" required>
                        </div>
                        <div class="col-6 ">
                            <p><input type="text" name="date" id="datepicker"  placeholder="Туда" class="Rectangle_3 btn btn-light " required></p>
                                <div class="Rectangle_5 form-group">
                                    <select class="form-control" id="exampleFormControlSelect1" name="passenger">
                                        <option value="1">1 Пассажир</option>
                                        <option value="2">2 Пассажира</option>
                                        <option value="3">3 Пассажира</option>
                                        <option value="4">4 Пассажира</option>
                                        <option value="5">5 Пассажиров</option>
                                        <option value="6">6 Пассажиров</option>
                                        <option value="7">7 Пассажиров</option>
                                        <option value="8">8 Пассажиров</option>
                                        <option value="9">9 Пассажиров</option>
                                    </select>
                                </div>
                            <input type="submit" name="true" value="Найти" class="btn btn-primary center">
                        </div>
                    </div>
                </div>
            </form>
        </tbody>
    </table>
</body>
</html>