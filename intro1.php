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

        body {
            background-image: url("./img/intro/intro.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        /*斷點區*/
        @media (max-width: 575px) {
            iframe {
                height: 300px
            }
        }

        /* sm */
        @media (min-width: 576px) {
            iframe {
                height: 400px
            }
        }

        /* md */

        @media (min-width: 768px) {
            iframe {
                height: 500px
            }
        }

        /* lg */
        @media (min-width: 992px) {}
    </style>
</head>

<body>

    <div id="content" class="">
        <!-- 上方導覽列 -->
        <?php
        include('navbar_page.php');
        ?>

        <div class="container mt-4 " style="margin-bottom:200px">
            <div class="h-100 row bg1 flex-column justify-content-center align-items-center shadow">
                <div class="w-100">
                    <h1 class=" text-center mt-3 py-2">遊戲介紹</h1>
                    <hr>
                    <nav aria-label="breadcrumb" class="align-self-start ">
                        <ol class="breadcrumb1 mt-2 ">
                            <li class="mr-2" style="color:rgb(49, 49, 49)"><i class="fas fa-home mr-1"></i>目前位置:</li>
                            <li class="breadcrumb1-item"><a href="index.php" style="color:rgb(49, 49, 49)">Home</a></li>
                            <li class="breadcrumb1-item" style="color:rgb(49, 49, 49)">遊戲內容</li>
                            <li class="breadcrumb1-item active"></li>
                            <li class="h3 text-danger"> 遊戲介紹</span>
                        </ol>
                    </nav>
                </div>
                <div style="width:75%">
                    <div class="col">
                        <span>來自《ARK：生存進化》的創造者帶來了ATLAS-終極海盜體驗！同時與成千上萬的其他玩家一起探索持久的大規模開放世界。建造您的船，聚集您的船員，在大海航行，尋找埋藏的寶藏，掠奪玩家建造的定居點（或用您自己的定居點代替），並逐島征服ATLAS的世界。在您獨自指揮大型戰艦時對敵人的艦隊發動戰爭-或將責任分配給您值得信賴的船東。潛入水深處，探索沉船殘骸。與其他探險家合作，探索擁有豐富資源，外來生物和過去遺蹟的新土地。成為這個追求財富和榮耀的海盜傳奇！
                        </span>
                        <div class=" text-center mx-2 my-2 ">
                            <iframe width="100%" height="" src="https://www.youtube.com/embed/miwYMiEUYiA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>

                    </div>

                    <div class="col ">
                        <div class="media d-flex flex-lg-row flex-column align-items-center">
                            <img src="img/intro/intro1.jpg" class="mr-3 rounded-circle" height="250px" width="250px">
                            <div class="media-body d-flex flex-column align-items-center align-items-lg-start">
                                <h3 class="mt-3 ">創造夢想的海盜船</h3> <br>
                                <div>從微小的木筏，小艇到大型護衛艦和大帆船，借助我們強大的船舶定制系統，您夢想中的船隻就只有一個造船廠。逐段構造您的船，給它起個名字，設計風帆的外觀，並準確確定船上所有木板，桅杆和槍口的位置。</div>
                            </div>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="media d-flex flex-lg-row flex-column-reverse align-items-center">
                            <div class="media-body d-flex flex-column align-items-center align-items-lg-start">
                                <h3 class="mt-3">探索一個龐大的世界</h3> <br>
                                <div> 航行在廣闊的海洋中，擁有超過45,000平方公里的700多個陸地。在許多不同的世界地區中發現數千個景點，每個景點都有自己獨特的資源，生物，秘密和危險！</div>
                            </div>
                            <img src="img/intro/intro2.jpg" class="mr-3 rounded-circle" height="250px" width="250px">
                        </div>
                    </div>

                    <div class="col ">
                        <div class="media d-flex flex-lg-row flex-column align-items-center">
                            <img src="img/intro/intro3.jpg" class="mr-3 rounded-circle" height="250px" width="250px">
                            <div class="media-body d-flex flex-column align-items-center align-items-lg-start">
                                <h3 class="mt-3">體驗經典海盜行動</h3> <br>
                                <div> 成為世界上最偉大的突擊手，手槍包裝的槍手或大師級的砲手。進行對陸上要塞的猛烈襲擊，從鉤鉤擺動到登上敵艦，或將彈道砲彈射入敵人的船體。無論是在劍的末端……還是以真正的海盜方式……在繩索的末端，ATLAS的世界都不乏分配敵人的方法。</div>
                            </div>
                        </div>
                    </div>

                    <div class="col  mb-3">
                        <div class="media d-flex flex-lg-row flex-column-reverse align-items-center">
                            <div class="media-body d-flex flex-column align-items-center align-items-lg-start">
                                <h3 class="mt-3">建立你的公會</h3> <br>
                                <div>是否想建立一個橫跨兩極的富裕商人帝國？一直想指揮一群競標者中最高出價的人嗎？還是您想建立政府海軍並保護無辜者免受海盜侵害？在ATLAS中，您可以建立可以想到的任何組織。為您的公會創建一個解決方案，並使用我們的模塊化構建系統逐步構建它。競爭其他公會的土地，構築物或船隻，並將它們添加到您的隊伍中。有了合適的組織，世界就是您的大版圖。</div>
                            </div>
                            <img src="img/intro/intro4.jpg" class="mt-3 mr-3 rounded-circle" height="250px" width="250px">
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

</body>

</html>