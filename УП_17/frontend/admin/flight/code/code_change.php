<?php
session_start();

if($_GET){
    $_SESSION['ru'] = true;
    $_SESSION['ID'] = $_GET['ID'];
    $_SESSION['W'] = $_GET['Where_from'];
    $_SESSION['_W_'] = $_GET['__Where__'];
    $_SESSION['D'] = $_GET['Day'];
    $_SESSION['Dep'] = $_GET['Departure'];
    $_SESSION['Arr'] = $_GET['Arrivals'];
    $_SESSION['Time'] = $_GET['Time_in_sky'];
    $_SESSION['price'] = $_GET['price'];
    header('location: ../change.php');
}
if($_POST){
    $ID = $_POST['ID'];
    $W = $_POST['W'];
    $_W_ = $_POST['_W_'];
    $D = $_POST['D'];
    $Dep = $_POST['Dep'];
    $Arr = $_POST['Arr'];
    $Time = $_POST['Time'];
    $price = $_POST['price'];

    $mysql = new mysqli('localhost','root','','bez_reg');
    include "arr.php";

    for($i=0; $i<count($arr); $i++){
        if($W == $arr[$i]){
            for($j=0; $j<count($array); $j++){
                if($_W_ == $array[$j]){
                    $result = $mysql->query("UPDATE `flights` SET `Where from`='$W',`__Where__`='$_W_',`Day`='$D',`Departure`='$Dep',`Arrivals`='$Arr',`Time in sky`='$Time',`price`='$price' WHERE `ID`=". $ID);
                    if($result == true){
                        unset($_SESSION['ru']);
                        header('location: ../change.php');
                        exit();
                    }else{
                        unset($_SESSION['ru']);
                        header('location: ../change.php');
                        exit();
                    }
                }
            }
        }
    }
    if($W != $arr[$i]){
        $_SESSION['admin'] = "Город ".$W." был не коректно веден или нет в этом городе аэропорта";
        unset($_SESSION['ru']);
        header('location: ../change.php');
        exit();
    }elseif($_W_ != $array[$j]){
        $_SESSION['admin'] = "Город ".$_W_." был не коректно веден нет в этом городе аэропорта";
        unset($_SESSION['ru']);
        header('location: ../change.php');
        exit();
    }



}






