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

        <div class="container mt-4" style="margin-bottom:200px">

            <div class="h-100 row bg1 flex-column justify-content-start align-items-center shadow">
                <div class="w-100">
                    <h1 class="text-center mt-3 py-2">遊戲下載</h1>
                    <hr>
                    <nav aria-label="breadcrumb" class="align-self-start">
                        <ol class="breadcrumb1 mt-2">
                            <li class="mr-2" style="color:rgb(49, 49, 49)"><i class="fas fa-home mr-1"></i>目前位置:</li>
                            <li class="breadcrumb1-item"><a href="index.php" style="color:rgb(49, 49, 49)">Home</a></li>
                            <li class="breadcrumb1-item" style="color:rgb(49, 49, 49)">下載專區</li>
                            <li class="breadcrumb1-item active" aria-current="page">遊戲下載</li>
                        </ol>
                    </nav>
                </div>
                <div class="my-3">
                    <h4 class="text-center">◇下載須知◇</h4>
                    <hr>
                    <ol>
                        <li>遊戲安裝與執行時建議關閉防火牆及其他應用程式。</li>
                        <li>請確認電腦顯示卡的更新與驅動完全。</li>
                        <li>本遊戲必須在 DirectX 9.0c 以上版本環境下進行，建議於安裝遊戲主程式前安裝。</li>
                        <li>重新安裝遊戲程式時，請確認是否完整移除舊遊戲主程式 ( 含資料夾 ) 。</li>
                    </ol>
                </div>
                <div class="mt-2">

                    <a href="https://store.steampowered.com/app/834910/ATLAS/" class="btn btn-secondary btn-lg mr-2 active" role="button" aria-pressed="true" target="_blank"><img src="img/steam.png" hight="25" width="75">　遊戲主程式下載 </a>

                </div>
                <div class="mt-5 w-75">
                    <ol>
                        <h4 class="text-center">◇系統需求◇</h4>
                        <table class="table table-borderless text-center ">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">最低配備</th>
                                    <th scope="col">推薦配備</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th scope="row">作業系統</th>
                                    <td> Windows 7/8.1/10 (64-bit versions)</td>
                                    <td>Windows 8.1/10 (64-bit versions)</td>
                                </tr>
                                <tr>
                                    <th scope="row">CPU</th>
                                    <td>Intel(R) Pentium® 4 CPU 2.80GHz</td>
                                    <td>Intel(R) Core™2 Duo CPU E4xxx</td>
                                </tr>
                                <tr>
                                    <th scope="row">記憶體</th>
                                    <td>4 GB 記憶體</td>
                                    <td>16 GB 記憶體</td>
                                </tr>
                                <tr>
                                    <th scope="row">顯示卡</th>
                                    <td> NVIDIA GeForce 6xxx/ATI Radeon HD 3xxx </td>
                                    <td> NVIDIA GeForce 8xxx/ATI Radeon HD 5xxx </td>
                                </tr>
                                <tr>
                                    <th scope="row">硬碟空間</th>
                                    <td>50 GB 可用空間</td>
                                    <td>120 GB 可用空間</td>
                                </tr>
                            </tbody>
                        </table>
                    </ol>
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