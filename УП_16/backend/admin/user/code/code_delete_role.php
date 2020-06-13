<?php

$ID = $_POST['ID'];
$mysql = new mysqli('localhost', 'root', '', 'bez_reg');
$mysql->query("UPDATE `users` SET `role`= '4' WHERE ID=". $ID);
header('location: ../role.php');