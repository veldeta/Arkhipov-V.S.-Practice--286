<?php
if(!$_COOKIE['admin']){
    header('location: ../index.php');
}
?>
<!DOCTYPE>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $_COOKIE['admin']?></title>
    <? include "../Connections/Connections.php" ?>
    <link rel = "stylesheet" href = "../css/style.css">
</head>
<body background="../img/super.ua-1525935571.jpg" class="fon">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-4"></div>
            <div class="col-6 col-md-4">
                <form action="../admin/ad.php" method="post" class="oil">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect1" name="fun">
                                    <option value="0">Добавить</option>
                                    <option value="1">Изменить</option>
                                    <option value="2">Удалить</option>
                                    <option value="3">Поменять роль</option>
                                </select>
<!--                            <input type="" class="form-control" name="" value="" placeholder="">-->
<!--                            <input type="" class="form-control" name="" value="" placeholder="">-->
<!--                            <input type="" class="form-control" name="" value="" placeholder="">-->
<!--                            <input type="" class="form-control" name="" value="" placeholder="">-->
<!--                            <input type="" class="form-control" name="" value="" placeholder="">-->
<!--                            <input type="" class="form-control" name="" value="" placeholder="">-->
<!--                            <input type="" class="form-control" name="" value="" placeholder="">-->
                                <button type="submit" class="btn btn-warning">Изменить</button>
                            </div>
                        </div>
                    </div>
                </form>
                <form action="exit.php" method="post" class="oil2">
                    <button type="submit" name="" class="btn btn-danger">Выйти</button>
                </form>
            </div>
            <div class="col-6 col-md-4"></div>
        </div>
    </div>

</body>
</html>
