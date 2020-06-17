<?php
session_start();
unset($_SESSION['ru']);
header('location: ../../../php/admin.php');