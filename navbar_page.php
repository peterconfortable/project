<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <!-- <style>
        .form-dark .font-small {
            font-size: 0.8rem;
        }

        .form-dark [type="radio"]+label,
        .form-dark [type="checkbox"]+label {
            font-size: 0.8rem;
        }

        .form-dark [type="checkbox"]+label:before {
            top: 2px;
            width: 15px;
            height: 15px;
        }

        .form-dark .md-form label {
            color: #fff;
        }

        .form-dark input[type=email]:focus:not([readonly]) {
            border-bottom: 1px solid #00C851;
            -webkit-box-shadow: 0 1px 0 0 #00C851;
            box-shadow: 0 1px 0 0 #00C851;
        }

        .form-dark input[type=email]:focus:not([readonly])+label {
            color: #fff;
        }

        .form-dark input[type=password]:focus:not([readonly]) {
            border-bottom: 1px solid #00C851;
            -webkit-box-shadow: 0 1px 0 0 #00C851;
            box-shadow: 0 1px 0 0 #00C851;
        }

        .form-dark input[type=password]:focus:not([readonly])+label {
            color: #fff;
        }

        .form-dark input[type="checkbox"]+label:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 17px;
            height: 17px;
            z-index: 0;
            border: 1.5px solid #fff;
            border-radius: 1px;
            margin-top: 2px;
            -webkit-transition: 0.2s;
            transition: 0.2s;
        }

        .form-dark input[type="checkbox"]:checked+label:before {
            top: -4px;
            left: -3px;
            width: 12px;
            height: 22px;
            border-style: solid;
            border-width: 2px;
            border-color: transparent #00c851 #00c851 transparent;
            -webkit-transform: rotate(40deg);
            -ms-transform: rotate(40deg);
            transform: rotate(40deg);
            -webkit-backface-visibility: hidden;
            -webkit-transform-origin: 100% 100%;
            -ms-transform-origin: 100% 100%;
            transform-origin: 100% 100%;
        }

        .form-dark .modal-header {
            border-bottom: none;
        }
    </style> -->

</head>

<body>



    <header class="navbar  navbar-expand-lg navbar-dark bg2 shadow">
        <a class="navbar-brand" href="index.php"><img src="img/45831658.png" width="50" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">
                        <i class="fas fa-home mr-2"></i>Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        最新消息
                    </a>
                    <div class="dropdown-menu bg2 " aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-white bg2" href="new1.php">
                            <i class="far fa-newspaper mr-2"></i>活動公告</a>
                        <a class="dropdown-item text-white bg2" href="new2.php">
                            <i class="fas fa-server mr-2"></i>系統公告</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        遊戲內容
                    </a>
                    <div class="dropdown-menu bg2 " aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-white bg2" href="intro1.php">
                            <i class="fas fa-gamepad mr-2"></i>遊戲簡介</a>
                        <a class="dropdown-item text-white bg2" href="intro3.php">
                            <i class="fas fa-dragon mr-2"></i>怪物列表</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        下載專區
                    </a>
                    <div class="dropdown-menu bg2 " aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-white bg2" href="download1.php">
                            <i class="fas fa-download mr-2"></i>遊戲下載</a>
                        <a class="dropdown-item text-white bg2" href="download2.php">
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
                            <i class="fab fa-twitch mr-2"></i>官方twitch</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav login menu-left">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        <i class="fas fa-users mr-2"></i>會員中心
                    </a>
                    <div class="dropdown-menu bg2 " aria-labelledby="navbarDropdown">
                        <a class="nav-link" href="#login" data-toggle="modal">
                            <i class="fas fa-user mr-3"></i>會員登入</a>
                        <a class="nav-link" href="#register" data-toggle="modal">
                            <i class="fas fa-user-plus mr-2"></i>會員註冊</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_loginpage.php">
                        <i class="fas fa-users-cog mr-2"></i>管理登入</a>
                </li>
            </ul>
        </div>
    </header>



    <!-- Modal 登入-->
    <div class="modal fade" id="login" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <!--Content-->

            <div class="modal-content form-elegant">
                <!--Header-->
                <div class="modal-header text-center">
                    <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>會員登入區</strong></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <form method="post" action="">
                    <div class="modal-body mx-4">
                        <!--Body-->
                        <div class="md-form mb-5">
                            <input type="text" id="loginid" class="form-control validate" placeholder="會員帳號" required>
                        </div>

                        <div class="md-form pb-3">
                            <input type="password" id="loginpwd" class="form-control validate" placeholder="會員密碼" required>
                        </div>

                        <div class="text-center mb-3">
                            <button type="submit" class="btn  blue-gradient btn-block btn-rounded z-depth-1a">登入</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <!-- Modal 註冊 -->
    <div class="modal fade" id="register" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content form-elegant">
                <!--Header-->
                <div class="modal-header text-center">
                    <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabe"><strong>會員註冊區</strong></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <form method="post" action="">
                    <div class="modal-body mx-4">
                        <!--Body-->
                        <div class="md-form mb-5">
                            <input type="text" id="registerid" class="form-control validate" placeholder="註冊帳號" required>
                        </div>

                        <div class="md-form pb-3">
                            <input type="password" id="registerpwd1" class="form-control validate" placeholder="註冊密碼" required>
                        </div>
                        <div class="md-form pb-3">
                            <input type="password" id="registerpwd2" class="form-control validate" placeholder="確認密碼" required>
                        </div>

                        <div class="text-center mb-3">
                            <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a">送出</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>




    <!-- Modal 登出-->
</body>

</html>