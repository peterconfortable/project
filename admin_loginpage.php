<?php
require_once('sql.php');
if (!empty($_SESSION['admin'])) plo("admin.php");



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理登入區</title>

    <!-- bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- FontAwesome.css -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Material Design Bootstrap -->
    <!-- <link rel="stylesheet" href="css/mdb.min.css"> -->

    <link rel="stylesheet" href="css/mystyle.css">

    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600,300);
      
        body,
        html {
            /* background-image: url("./img/admin.jpg");
  background-repeat: no-repeat;
  background-size: cover; */
            font-family: '微軟正黑體';
        }

        .wrap {
            margin: 0 auto;
        }

        .login {
            width: 300px;
            margin-top: 40vh;
        }

        .login input[type=text],
        .login input[type=password] {
            opacity: 1;
            display: block;
            border: none;
            outline: none;
            width: 280px;
            padding: 10px;
            margin: 20px 0 0 0;
            border-radius: 2px;
        }

        .login input[type=text] {
            animation: bounce 1s;
            -webkit-appearance: none;
        }

        .login input[type=text]:focus:valid {
            /* box-shadow: 0 0 0 10000px #2ecc71; */
        }

        .login input[type=text]:focus:valid~input[type=button] {
            background: #27ae60;
            color: #2ecc71;
        }

        .login input[type=text]:focus:valid~input[type=submit] {
            color: #2ecc71;
        }

        .login input[type=text]:invalid {
            box-shadow: 0 0 0 10000px #e74c3c;
        }

        .login input[type=text]:invalid~input[type=button] {
            background: #c0392b;
            color: #e74c3c;
        }

        .login input[type=text]:invalid~input[type=submit] {
            color: #e74c3c;
        }

        .login input[type=password] {
            animation: bounce1 1.3s;
        }

        .login input[type=submit],
        .login input[type=button] {
            border: 0;
            outline: 0;
            padding: 13px 18px;
            margin: 40px 0 0 0;
            border-radius: 2px;
            font-weight: 600;
            animation: bounce2 1.6s;
        }

        .login input[type=submit] {
            float: right;
            background: #fff;
            color: #34495e;
            outline: none;
        }

        .login input[type=button] {
            background: #2C3E50;
            color: #34495e;
        }

        @keyframes bounce {
            0% {
                transform: translateY(-250px);
                opacity: 0;
            }
        }

        @keyframes bounce1 {
            0% {
                opacity: 0;
            }

            40% {
                transform: translateY(-100px);
                opacity: 0;
            }
        }

        @keyframes bounce2 {
            0% {
                opacity: 0;
            }

            70% {
                transform: translateY(-20px);
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <header class="navbar  navbar-expand-lg navbar-dark bg2 align-content-center">
        <a class="navbar-brand" href="index.php"><img src="img/45831658.png" width="50" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ">
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
                <li class="nav-item dropdown">
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

    </header>
    <!-- 管理登入介面 -->
    <div class="login wrap d-flex flex-column align-items-center">
        <form method="post" action="api.php?do=check">
            <h1 class="text-center">管理者 Log In</h1>
            <input type="text" name="acc" placeholder="管理帳號" />
            <input type="password" name="pwd" placeholder="管理密碼" class="mb-3" />
            <button type="submit" class="btn btn-dark btn-block btn-large">登入</button>
        </form>
    </div>





    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap JS -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>