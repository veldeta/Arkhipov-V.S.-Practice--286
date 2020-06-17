<?php
session_start();


unset($_SESSION['data']);
unset($_SESSION['rol']);

header('location: ../html/lich.php');