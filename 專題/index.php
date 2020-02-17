<?php
require_once('sql.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ATLAS官網</title>
    <!-- bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- FontAwesome.css -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet">
    <!-- 自己的CSS -->
    <link rel="stylesheet" href="css/homestyle.css">
    <style>
        .transparent {
            background-color: transparent;
        }

        .box {
            height: 75%;
            width: 75%;
        }

        .box1 {
            float: left;
            border: 0.5px solid rgba(255, 255, 255, 0.6);
            margin-left: 10px;

        }

        .more {
            width: 100%;
            height: 45px;
            background: gray;
            /* border: 1px solid #aaa; */
            opacity: 0.8;
            filter: alpha(opacity=80);
            border-radius: 22px;
            top: 0;
            font: normal 16px/45px "Microsoft Yahei";
            text-align: center;
            color: #fff;
            transition: opacity 0.5s;
            -webkit-transition: opacity 0.5s;
        }

        #event > a:hover {
            background-color: black;
            color: white;
        }
    </style>


<body data-spy="scroll" data-target="#navbarSupportedContent">

    <div id="content" class="h-100">
        <!-- 上方導覽列 -->

        <?php
        include('navbar.php');
        ?>


        <section id="section01" class="h-100  bg3">
            <div class="w-100 h-100 ">                

                <div class="h-75 w-100 row  flex-column justify-content-start">
                <div>
                   
                    <!-- <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item"
                            src="https://steamcdn-a.akamaihd.net/steam/apps/256763842/movie480.webm?t=1570241582"></iframe>
                    </div> -->
                </div>
            </div>

        </section>

        <!-- 影片 + 最新消息 -->
        <section id="section02" class="h-75  bg5 d-flex  align-items-center justify-content-center text-white shadow">

            <div class="box d-flex justify-content-center align-items-center ">
                <div class="h-75 box1 w-25">

                </div>
                <div class=" h-75 box1 w-50 p-2">
                    <h3 class="text-center mt-2">最新消息</h3>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active text-white bg-dark" id="nav-profile-tab" data-toggle="tab" href="#event" role="tab" >活動</a>
                        <a class="nav-item nav-link text-white bg-dark" id="nav-contact-tab" data-toggle="tab" href="#system" role="tab">系統</a>
                    </div>
                    <div class="tab-content " id="nav-tabContent">
                        <div class="tab-pane fade show active" id="event" role="tabpanel">
                            <?php
                            $rows = select("p4_new", "1 limit 0,6");
                            foreach ($rows as $row) {
                            ?>
                                <!-- <ul class="list-group list-group-flush"> -->
                                <a target="_blank" class="list-group-item transparent h6" href="<?= $row['link'] ?>"><?= $row['title'] ?></a>
                                <!-- </ul> -->
                            <?php
                            }
                            ?>
                            <div class="text-right py-1 h3">
                                <a href="new1.php"><i class="fas fa-plus text-white"></i></a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="system" role="tabpanel">
                            <?php
                            $rows = select("p5_new2", "1 limit 0,6");
                            // print_r($rows);
                            foreach ($rows as $row) {
                            ?>
                                <!-- <ul class="list-group list-group-flush"> -->
                                <li class="list-group-item transparent h6"><span style="float: right"><?= $row['date'] ?></span><?= $row['text'] ?></li>
                                <!-- </ul> -->
                            <?php
                            }
                            ?>
                            <div class="text-right py-1 h3">
                                <a href="new2.php"><i class="fas fa-plus text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="h-75 w-25 box1">
                    <div class="  h-100 w-100">
                        <div class="w-100">
                            <h3 class="text-center">資料站</h3>
                            <P class="text-center">WIKI</P>
                        </div>
                        <div class="w-100 d-flex justify-content-center">
                            <a href="" class="w-50 more">立即查看</a>
                        </div>
                    </div>


                </div>
            </div>
        </section>


        <!-- 輪播區 -->

        <section id="section03" class="h-100 ">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade h-100" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner  h-100 ">
                    <?php
                    // $rows = select("p2_carousel",1);
                    // foreach ($rows as $row ) {
                    ?>
                    <div class="carousel-item active h-100">
                        <img src="img/carouseldownload/<?= $t2_img0 ?>" class="d-block w-100 img-scale">
                    </div>
                    <div class="carousel-item  h-100">
                        <img src="img/carouseldownload/<?= $t2_img1 ?>" class="d-block w-100 img-scale">
                    </div>
                    <div class="carousel-item  h-100">
                        <img src="img/carouseldownload/<?= $t2_img2 ?>" class="d-block w-100 img-scale">
                    </div>
                    <?php
                    // }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>





        <footer id="footer" class="bg2 row align-items-center" style="height:15%">

            <ul class=" col list-unstyled text-white d-flex flex-column flex-lg-row align-items-center justify-content-center">
                <li class=>
                    <a href="index.php">
                        <i class="fas fa-home mr-2"></i></a>
                </li>
                <li class="mr-2 ">
                    <?= $t3_text ?>
                </li>
                <li>
                    <a href="https://www.facebook.com/playatlasgame/" target="_blank">
                        <i class="fab fa-facebook-square mr-2"></i></a>
                    <a href="https://twitter.com/sailtheatlas" target="_blank">
                        <i class="fab fa-twitter mr-2"></i></a>
                </li>
                <li>
                    <img src="img/footerdownload/<?= $t3_img ?>" width="50" height="50">
                </li>
                <li>
                    <ul>
                        <li>本遊戲部份內容涉及暴力。</li>
                        <li>請避免沉迷遊戲。</li>
                        <li>本遊戲部份內容需另行支付費用。</li>
                    </ul>
                </li>
            </ul>
        </footer>
    </div>










    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap JS -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>

    </script>

</body>

</html>