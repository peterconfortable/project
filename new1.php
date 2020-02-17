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

        /*牛皮紙2底色*/
        .bg4 {
            background-image: url("./img/bg2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }


        body {
            background-image: url("./img/1bg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }


        .row .col-lg-6:nth-child(odd) .card {
            margin-left: 5rem;
        }

        .row .col-lg-6:nth-child(even) .card {
            margin-right: 5rem;
        }
    </style>
</head>


<body">



    <?php
    include('navbar_page.php');
    ?>


    <div class="container mt-4 " style="margin-bottom:200px">
        <div class=" row bg1 flex-row justify-content-center align-items-start shadow">
            <div class="w-100">
                <h1 class="text-center mt-3 py-2">活動公告</h1>
                <hr>
                <nav aria-label="breadcrumb" class="align-self-start">
                    <ol class="breadcrumb1 mt-2">
                        <li class="mr-2" style="color:rgb(49, 49, 49)"><i class="fas fa-home mr-1"></i>目前位置:</li>
                        <li class="breadcrumb1-item"><a href="index.php" style="color:rgb(49, 49, 49)">Home</a></li>
                        <li class="breadcrumb1-item" style="color:rgb(49, 49, 49)">最新消息</li>
                        <li class="breadcrumb1-item active" aria-current="page">活動公告</li>
                    </ol>
                </nav>
            </div>
            <div class=" row flex-row   ">

                <?php
                $rows = select("p4_new", "dpy=1");
                foreach ($rows as $row) {
                    // print_r($rows);               
                    // print_r($row["title"]);


                ?>
                    <div class="col-12 col-lg-6 p-3 d-flex justify-content-center ">
                        <div class="card  h-100 rounded bg4 shadow-lg mx-4">
                            <img src="img/new/<?= $row["img"] ?>" class="card-img-top p-3" style="height:300px">
                            <div class="card-body text-light">
                                <h5 class="card-title"><?= $row['title'] ?> </h5>
                                <p class="card-text" style="color: white">

                                    <?= $row['text'] ?></p>

                            </div>
                            <a href="<?= $row['link'] ?>" target="_blank" class="btn btn-outline-info w-50 align-self-center mb-3">Looking more</a>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>

        </div>
    </div>
    <?php
    include('footer.php');
    ?>












    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap JS -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    </body>

</html>