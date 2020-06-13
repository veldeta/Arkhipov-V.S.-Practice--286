<?php
session_start();

$W = $_POST['W'];
$_W_ = $_POST['_W_'];
$D = $_POST['D'];
$Dep = $_POST['Dep'];
$Arr = $_POST['Arr'];
$Time = $_POST['Time'];
$price = $_POST['price'];

$mysql = new mysqli('localhost', 'root', '', 'bez_reg');
include 'arr.php';



for($i=0; $i<count($arr); $i++){
    if($W == $arr[$i]){
        for($j=0; $j<count($array); $j++){
            if($_W_ == $array[$j]){
                $result = $mysql->query("INSERT INTO `flights` (`Where from`,`__Where__`,`Day`,`Departure`,`Arrivals`,`Time in sky`,`price`) VALUE ('$W','$_W_','$D','$Dep','$Arr','$Time','$price')");
                if($result == true){
                    header('location: ../Add.php');
                    exit();
                }else{
                    header('location: ../Add.php');
                    exit();
                }
            }
        }
    }
}
if($W != $arr[$i]){
    $_SESSION['admin'] = "Город ".$W." был не коректно веден или нет в этом городе аэропорта";
    header('location: ../Add.php');
    exit();
}elseif($_W_ != $array[$j]){
    $_SESSION['admin'] = "Город ".$_W_." был не коректно веден нет в этом городе аэропорта";
    header('location: ../Add.php');
    exit();
}