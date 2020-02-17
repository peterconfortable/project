<?php
require_once("sql.php");
if (empty($_SESSION["admin"])) plo("admin_loginpage.php");

$mainzone = (!empty($_GET['do'])) ? $_GET['do'] : "carousel";

// print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>後臺管理區</title>

    <!-- bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- FontAwesome.css -->
    <link rel="stylesheet" href="css/all.min.css">

    <link rel="stylesheet" href="css/mystyle.css">
    <script src="js/myjs.js"></script>
    <style>
        body {
            background-image: url("./img/admin2.jpg");
            background-repeat: no-repeat;
            background-size: cover;


        }
    </style>
</head>

<body data-spy="scroll" data-target="#navbarSupportedContent">

    <div id="cover" style="display:none;">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl('#cover')">x</a>
            <div id="cvr">

            </div>
        </div>

    </div>
    <div id="content" class="">
        <!-- 上方導覽列 -->
        <header class="navbar  navbar-expand-lg navbar-dark bg2 align-content-center shadow">
            <a class="navbar-brand" href="index.php"><img src="img/45831658.png" width="50" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav  mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">
                            <i class="fas fa-home mr-2"></i>Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                            最新消息
                        </a>
                        <div class="dropdown-menu bg2 " aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-white" href="new1.php">
                                <i class="far fa-newspaper mr-2"></i>活動公告</a>
                            <a class="dropdown-item text-white" href="new2.php">
                                <i class="fas fa-server mr-2"></i>系統公告</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                            遊戲內容
                        </a>
                        <div class="dropdown-menu bg2 " aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-white" href="intro1.php">
                                <i class="fas fa-gamepad mr-2"></i>遊戲簡介</a>
                            <a class="dropdown-item text-white" href="intro3.php">
                                <i class="fas fa-dragon mr-2"></i>怪物列表</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                            下載專區
                        </a>
                        <div class="dropdown-menu bg2 " aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-white" href="download1.php">
                                <i class="fas fa-download mr-2"></i>遊戲下載</a>
                            <a class="dropdown-item text-white" href="download2.php">
                                <i class="fas fa-file-download mr-2"></i>桌布下載</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                            社群互動
                        </a>
                        <div class="dropdown-menu bg2 " aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-white" href="https://www.facebook.com/playatlasgame/" target="_blank">
                                <i class="fab fa-facebook-square mr-2"></i>官方Facebook</a>
                            <a class="dropdown-item text-white" href="https://www.youtube.com/playatlas" target="_blank">
                                <i class="fab fa-youtube mr-2"></i>官方youtube</a>
                            <a class="dropdown-item text-white" href="https://twitter.com/sailtheatlas" target="_blank">
                                <i class="fab fa-twitter mr-2"></i>官方twiter</a>
                            <a class="dropdown-item text-white" href="https://www.twitch.tv/sailtheatlas" target="_blank">
                                <i class="fab fa-twitch mr-2"></i>官方witch</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ">
                    <li class="nav-item dropdown align-self-center text-light mr-2">
                        <span>
                            <i class="far fa-user mr-2"></i>
                            <?php
                            
                            $rows = select("p1_admin", 1);                                                     
                            
                            ?>
                            <?=$rows[0]['acc']?>
                           
                        </span>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="api.php?do=logout" role="button">
                            後台登出</a>                        
                    </li>

                </ul>

        </header>

        <div class="container my-5">



            <div class="h-100 w-100 row bg1 flex-column justify-content-start shadow">

                <h1 class="text-center mt-3 py-2">後台管理區</h1>
                <div class=" d-flex w-100">                   
                    <div class="btn-group mx-auto" role="group" aria-label="Basic example">
                    <a href="?do=carousel"><button type="button" class="btn btn-outline-dark mr-3">輪播管理</button></a>
                    <a href="?do=afooter"><button type="button" class="btn btn-outline-dark mr-3">頁尾管理</button></a>
                    <a href="?do=anew"><button type="button" class="btn btn-outline-dark mr-3">活動管理</button></a>
                    <a href="?do=anew2"><button type="button" class="btn btn-outline-dark mr-3">系統公告</button></a>
                    <a href="?do=aadmin"><button type="button" class="btn btn-outline-dark">帳號管理</button></a>
                    </div>
                </div>
                <div class=" w-100 mx-auto p-2">
                    <?php
                    include_once($mainzone . '.php');
                    ?>
                </div>
            </div>

        </div>


    </div>

    <script>

    </script>

    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap JS -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>




</body>

</html>