<?php
require_once('sql.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ATLAS桌布下載</title>
    <!-- bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- FontAwesome.css -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- magnific-popup css -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/magnific-popup-single.css">
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

        body {
            background-image: url("./img/download/download.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body data-spy="scroll" data-target="#navbarSupportedContent">

    <div id="content" class="h-100">
        <!-- 上方導覽列 -->

        <?php
        include('navbar_page.php');
        ?>


        <div class="container   mt-4 "  style="margin-bottom:200px">
            <div class="h-100 row bg1 flex-column justify-content-start align-items-center shadow">
                <div class="w-100">
                    <h1 class="text-center mt-3 py-2">桌布下載</h1>
                    <hr>
                    <!-- 麵包屑 -->
                    <nav aria-label="breadcrumb" class="align-self-start">
                        <ol class="breadcrumb1 mt-2">
                            <li class="mr-2" style="color:rgb(49, 49, 49)"><i class="fas fa-home mr-1"></i>目前位置:</li>
                            <li class="breadcrumb1-item"><a href="index.php" style="color:rgb(49, 49, 49)">Home</a></li>
                            <li class="breadcrumb1-item" style="color:rgb(49, 49, 49)">下載專區</li>
                            <li class="breadcrumb1-item active" aria-current="page">桌布下載</li>
                        </ol>
                    </nav>
                </div>
                <!-- 圖片展示區 -->

                <div class="col row flex-column align-items-center flex-lg-row  ">

                    <div class="col-12 col-lg-4  align-self-center mt-3">

                        <figure class="figure">
                            <a class="image-popup-no-margins" href="img/download/download1-1.png"> <img src="img/download/download1.jpg" class="figure-img img-fluid rounded" alt="..."></a>
                        </figure>

                        <div class="row flex-row justify-content-center">


                            <a href="img/download/download1.jpg" class="btn btn-danger mr-2 active" role="button" aria-pressed="true" target="_blank">600x337</a>
                            <a href="img/download/download1-1.png" class="btn btn-primary mr-2 active" role="button" aria-pressed="true" target="_blank">1024x575</a>
                            <a href="img/download/download1-2.png" class="btn btn-success mr-2 active" role="button" aria-pressed="true" target="_blank">1280x719</a>

                        </div>
                    </div>

                    <div class="col-12 col-lg-4 align-self-center mt-3">
                        <figure class="figure">
                            <a class="image-popup-no-margins" href="img/download/download2-1.png"><img src="img/download/download2.jpg" class="figure-img img-fluid rounded" alt="..."></a>
                        </figure>

                        <div class="row flex-row justify-content-center">


                            <a href="img/download/download2.jpg" class="btn btn-danger mr-2 active" role="button" aria-pressed="true" target="_blank">600x337</a>
                            <a href="img/download/download2-1.png" class="btn btn-primary mr-2 active" role="button" aria-pressed="true" target="_blank">1024x575</a>
                            <a href="img/download/download2-2.png" class="btn btn-success mr-2 active" role="button" aria-pressed="true" target="_blank">1280x719</a>

                        </div>

                    </div>

                    <div class="col-12 col-lg-4 align-self-center mt-3">

                        <figure class="figure">
                            <a class="image-popup-no-margins" href="img/download/download3-1.png"><img src="img/download/download3.jpg" class="figure-img img-fluid rounded" alt="..."></a>
                        </figure>

                        <div class="row flex-row justify-content-center">


                            <a href="img/download/download3.jpg" class="btn btn-danger  mr-2 active" role="button" aria-pressed="true" target="_blank">600x337</a>
                            <a href="img/download/download3-1.png" class="btn btn-primary mr-2 active" role="button" aria-pressed="true" target="_blank">1024x575</a>
                            <a href="img/download/download3-2.png" class="btn btn-success mr-2 active" role="button" aria-pressed="true" target="_blank">1280x719</a>

                        </div>
                    </div>

                    <div class="col-12 col-lg-4 align-self-center my-3">

                        <figure class="figure">
                            <a class="image-popup-no-margins" href="img/download/download4-1.png"><img src="img/download/download4.jpg" class="figure-img img-fluid rounded" alt="..."></a>
                        </figure>

                        <div class="row flex-row justify-content-center">


                            <a href="img/download/download4.jpg" class="btn btn-danger mr-2 active" role="button" aria-pressed="true" target="_blank">600x337</a>
                            <a href="img/download/download4-1.png" class="btn btn-primary mr-2 active" role="button" aria-pressed="true" target="_blank">1024x575</a>
                            <a href="img/download/download4-2.png" class="btn btn-success mr-2 active" role="button" aria-pressed="true" target="_blank">1280x719</a>

                        </div>
                    </div>

                    <div class="col-12 col-lg-4 align-self-center my-3">

                        <figure class="figure">
                            <a class="image-popup-no-margins" href="img/download/download5-1.png"><img src="img/download/download5.jpg" class="figure-img img-fluid rounded" alt="..."></a>
                        </figure>
                        <div class="row flex-row justify-content-center">


                            <a href="img/download/download5.jpg" class="btn btn-danger mr-2 active" role="button" aria-pressed="true" target="_blank">600x337</a>
                            <a href="img/download/download5-1.png" class="btn btn-primary mr-2 active" role="button" aria-pressed="true" target="_blank">1024x575</a>
                            <a href="img/download/download5-2.png" class="btn btn-success mr-2 active" role="button" aria-pressed="true" target="_blank">1280x719</a>

                        </div>
                    </div>

                    <div class="col-12 col-lg-4 align-self-center my-3">

                        <figure class="figure">
                            <a class="image-popup-no-margins" href="img/download/download6-1.png"><img src="img/download/download6.jpg" class="figure-img img-fluid rounded" alt="..."></a>
                        </figure>

                        <div class="row flex-row justify-content-center">

                            <a href="img/download/download6.jpg" class="btn btn-danger mr-2 active" role="button" aria-pressed="true" target="_blank">600x337</a>
                            <a href="img/download/download6-1.png" class="btn btn-primary mr-2 active" role="button" aria-pressed="true" target="_blank">1024x575</a>
                            <a href="img/download/download6-2.png" class="btn btn-success mr-2 active" role="button" aria-pressed="true" target="_blank">1280x719</a>

                        </div>
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
    <!-- magnific-popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-single.js"></script>

</body>

</html>