<?php

$gold = $_POST['fun'];

switch ($gold) {
    case '0':

        header('location: ../html/dor.php');
        break;
    case '1':
        header('location: ../html/change.php');
        break;
    case '2':
        header('location: ../html/code_delete.php');
        break;
    case '3':
        header('location: ../html/role.html.php');
        break;
}
