<?php
require_once('sql.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>遊戲下載區</title>
    <!-- bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- FontAwesome.css -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet">
    <!-- 自己的CSS -->
    <link rel="stylesheet" href="css/mystyle.css">





    <style>
        /*牛皮紙1底色*/
        .bg1 {
            background-image: url("/專題/img/bg1.jpg");
            background-repeat: no-repeat;
            background-size: cover;

        }

        span {
            float: right;
        }

        .transparent {
            background-color: transparent;
        }

        html,
        body {
            height: 100%;
            background-image: url("./img/1bg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>


<body>

    <div id="content" class="h-100">
        <!-- 上方導覽列 -->

        <?php
        include('navbar_page.php');
        ?>

        <div class="container  mt-4" style="margin-bottom:200px">
            <div class="h-100 row bg1 flex-row justify-content-center shadow">
                <div class="w-100">
                    <h1 class="text-center mt-3 py-2">系統公告</h1>
                    <hr>
                    <nav aria-label="breadcrumb" class="align-self-start">
                        <ol class="breadcrumb1 mt-2">
                            <li class="mr-2" style="color:rgb(49, 49, 49)"><i class="fas fa-home mr-1"></i>目前位置:</li>
                            <li class="breadcrumb1-item"><a href="index.php" style="color:rgb(49, 49, 49)">Home</a></li>
                            <li class="breadcrumb1-item" style="color:rgb(49, 49, 49)">最新消息</li>
                            <li class="breadcrumb1-item active" aria-current="page">系統公告</li>
                        </ol>
                    </nav>
                </div>

                <div class="w-75">
                    <div class="list-group list-group-flush ">
                        <?php
                        $nowpage = (empty($_GET['page'])) ? 1 : $_GET['page'];
                        $begin = ($nowpage - 1) * 10; //要將nowpage和$begin化成一個公式

                        $rows = select("p5_new2", "dpy=1 limit " . $begin . ",10"); //$begin=0,10,20  第幾筆開始  nowpage1>0 nowpage2>10 nowpage3>20


                        foreach ($rows as $row) {
                            // print_r($row);                    

                        ?>

                            <li class="list-group-item transparent"><span><?= $row['date'] ?></span><a><?= $row['text'] ?></a></li>

                        <?php
                        }
                        ?>

                    </div>

                    <div style="text-align:center" class="mt-3">
                        <?php
                        $result = navpage("p5_new2", 1, 10, $nowpage);
                        // print_r($result);

                        foreach ($result as $key => $value) {
                            echo '<a class="p-2 h5" href="?do=anew2&page=' . $value . '" style="background:transparent; border:none; color:black;">' . $key . '</a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include('footer.php');
        ?>

    </div>











    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap JS -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</body>

</html>