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
    </style>
</head>


<body>

    <div id="content" class="">
        <!-- 上方導覽列 -->

        <?php
        include('navbar_page.php');
        ?>

        <div class="container mt-4"   style="margin-bottom:200px">
            <div class="row bg1 flex-row justify-content-center align-items-start shadow">
                <div class="w-100">
                    <h1 class="text-center mt-3 py-2">怪物列表</h1>
                    <hr>
                    <nav aria-label="breadcrumb" class="align-self-start">
                        <ol class="breadcrumb1 mt-2">
                            <li class="mr-2" style="color:rgb(49, 49, 49)"><i class="fas fa-home mr-1"></i>目前位置:</li>
                            <li class="breadcrumb1-item"><a href="index.php" style="color:rgb(49, 49, 49)">Home</a></li>
                            <li class="breadcrumb1-item" style="color:rgb(49, 49, 49)">遊戲內容</li>
                            <li class="breadcrumb1-item active" aria-current="page">怪物列表</li>
                        </ol>
                    </nav>
                </div>


                <div class="w-100 row flex-row ">

                    <div class="col-12 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                        <!-- Button trigger modal -->
                        <h2 class="mt-3">火元素</h2>
                        <a class=""><img class="img z-depth-1 rounded border border-danger" src="img/intro3/fire.jpg" height="200px" width="200px " alt="video" data-toggle="modal" data-target="#intro1"></a>

                        <!-- Modal -->
                        <div class="modal fade" id="intro1" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered " role="document">
                                <div class="modal-content bg1">
                                    <div class="modal-header">

                                        <button type="button" class="close" data-dismiss="modal" class="btn btn-outline-dark">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                    </div>
                                    <div class="modal-body d-flex flex-column align-items-center">
                                        <h5 class=" flex-grow-1 modal-title  mb-2" id="exampleModalCenterTitle">火元素(Fire Elemental)</h5>
                                        <img src="img/intro3/fire.jpg" height="200px" width="200px" class="rounded-circle">
                                        <p class="text-center mt-2">守護著黃金時代廢墟島上地圖集的力量石的眾多稀有怪物之一。</p>
                                        <hr class="mt-0">
                                        <p>馴服方式：</p>
                                        <p>
                                            將生命值降低到一個較低的水平，然後使用您的快捷欄上的令牌，這會暫時將Fire Elemental變成可以訂購和安裝的友善馴服。
                                        </p>
                                        <p>攻擊方式：</p>
                                        <p>
                                            投擲兩種不同類型的火球。 它會拋出3個不跟踪目標的火球，但是會用雙臂在頭頂上彈一個火球，發出獨特的聲音，然後該火球將跟踪其目標並最終擊中它，除非被阻擋。 您可以通過將火球撞向樹，船，飛向您的任何其他物體來避免火球被鎖定。 元素還將對附近的敵人發動揮臂攻擊。 它的農作物範圍非常大。
                                            石箭射擊會暫時使元素昏迷並打斷火球投擲。 石箭只會對它們造成3點傷害，但對於延緩其攻擊並阻止其移動非常有用，因此您可以使用其他玩家和船隻上的其他武器來擊打它。 可以用ball砲塔殺死他們，對火元素造成重大傷害。
                                        </p>

                                    </div>
                                    <div class="modal-footer align-self-center ">
                                        <button type="button" class="btn btn-outline-dark " data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                        <!-- Button trigger modal -->
                        <h2 class="mt-3">獨眼巨人</h2>
                        <a class=""><img class="img z-depth-1 rounded border border-danger" src="img/intro3/eye.jpg" height="200px" width="200px " alt="video" data-toggle="modal" data-target="#intro2"></a>

                        <!-- Modal -->
                        <div class="modal fade" id="intro2" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered " role="document">
                                <div class="modal-content bg1">
                                    <div class="modal-header">

                                        <button type="button" class="close" data-dismiss="modal" class="btn btn-outline-dark">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                    </div>
                                    <div class="modal-body d-flex flex-column align-items-center">
                                        <h5 class=" flex-grow-1 modal-title  mb-2" id="exampleModalCenterTitle">獨眼巨人(Cyclops)</h5>
                                        <img src="img/intro3/eye.jpg" height="200px" width="200px" class="rounded-circle">
                                        <p class="text-center mt-2">守護著黃金時代廢墟島上地圖集的力量石的眾多稀有怪物之一。<br>
                                            獨眼巨人是一隻大人形動物，一隻眼睛，一根大木錘。
                                        </p>
                                        <hr class="mt-0">
                                        <p>馴服方式：</p>
                                        <p>
                                            您現在可以使用從自由港的供應商處處購買的Cyclops令牌馴服並騎行。
                                        </p>
                                        <p>攻擊方式：</p>
                                        <p>
                                            他們會對在他們前面的玩家中進行攻擊。 他們的頭頂猛擊將使您昏迷一會兒。
                                            在正常狀態下，獨眼巨人具有很高的抗傷害性。 一旦擊中眼睛，它就會暫時失明，並且其抗傷害性急劇下降。
                                        </p>
                                    </div>
                                    <div class="modal-footer align-self-center ">
                                        <button type="button" class="btn btn-outline-dark " data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                        <!-- Button trigger modal -->
                        <h2 class="mt-3">德雷克</h2>
                        <a class=""><img class="img z-depth-1 rounded border border-danger" src="img/intro3/drake.jpg" height="200px" width="200px " alt="video" data-toggle="modal" data-target="#intro3"></a>

                        <!-- Modal -->
                        <div class="modal fade" id="intro3" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered " role="document">
                                <div class="modal-content bg1">
                                    <div class="modal-header">

                                        <button type="button" class="close" data-dismiss="modal" class="btn btn-outline-dark">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                    </div>
                                    <div class="modal-body d-flex flex-column align-items-center">
                                        <h5 class=" flex-grow-1 modal-title  mb-2" id="exampleModalCenterTitle">德雷克(Drake)</h5>
                                        <img src="img/intro3/drake.jpg" height="200px" width="200px" class="rounded-circle">
                                        <p class="text-center mt-2">侵略性極強，具有高攻擊範圍。 將無情地攻擊玩家和船隻。守護著黃金時代廢墟島上地圖集的力量石的眾多稀有怪物之一。</p>
                                        <hr class="mt-0">
                                        <p>馴服方式：</p>
                                        <p>
                                            Drake使用Drake令牌馴服，該令牌可在自由港的供應商處購買50,000金幣。
                                        </p>
                                        <p>攻擊方式：</p>
                                        <p>
                                            德雷克的主要攻擊是爆炸，因為它從頭頂飛過，隨著時間的推移造成燒傷，並點燃地面和建築物的區域。 如果距離足夠近，它也會咬人，但它通常會飛過敵人，向下方降落。
                                            雨天最好受到攻擊，因為火造成的燃燒損害少得多，而地火撲滅的速度也快得多。
                                        </p>

                                    </div>
                                    <div class="modal-footer align-self-center ">
                                        <button type="button" class="btn btn-outline-dark " data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-flex flex-column align-items-center mt-3">
                        <!-- Button trigger modal -->
                        <h2 class="mt-3">克拉肯</h2>
                        <a class=""><img class="img z-depth-1 rounded border border-danger" src="img/intro3/kraken.jpg" height="200px" width="200px " alt="video" data-toggle="modal" data-target="#intro4"></a>

                        <!-- Modal -->
                        <div class="modal fade" id="intro4" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered " role="document">
                                <div class="modal-content bg1">
                                    <div class="modal-header">

                                        <button type="button" class="close" data-dismiss="modal" class="btn btn-outline-dark">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                    </div>
                                    <div class="modal-body d-flex flex-column align-items-center">
                                        <h5 class=" flex-grow-1 modal-title  mb-2" id="exampleModalCenterTitle">克拉肯(Kraken)</h5>
                                        <img src="img/intro3/kraken.jpg" height="200px" width="200px" class="rounded-circle">
                                        <p class="text-center mt-2">收集完所有9塊能量石後，前往H8區域的中心變將觸發克拉肯生成。</p>
                                        <hr class="mt-0">
                                        <p>馴服方式：</p>
                                        <p>
                                            不可馴服!!
                                        </p>
                                        <p>攻擊方式：</p>
                                        <p>
                                            您必須尋找水渦。 當您站在它上面時，克拉肯就會出現。 他還將產生“詛咒之船”，因此準備好每隔第二個奇數階段面對這些。 風會向相反的方向推動您的船，因此在此事件中航行會困難得多。 克拉肯還將開始向他的仇恨目標射擊巨大的歸巢火花。 從現在開始，您需要1個小時才能完成他的任務。
                                            您不能直接損壞克拉肯。 瞄準它的觸角，迫使他進入均勻階段。
                                            每個偶數階段看起來都一樣，克拉肯幾乎死了，但是被實體保存了。 該實體在自身和首領周圍產生力場。 您必須損壞它，否則它將治愈克拉肯。
                                            在此階段之後，戰鬥將返回到奇數階段，但是某些觸手可能會通電或表現得更加激進。
                                        </p>

                                    </div>
                                    <div class="modal-footer align-self-center ">
                                        <button type="button" class="btn btn-outline-dark " data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-flex flex-column align-items-center mt-3">
                        <!-- Button trigger modal -->
                        <h2 class="mt-3">九頭蛇</h2>
                        <a class=""><img class="img z-depth-1 rounded border border-danger" src="img/intro3/hydra.jpg" height="200px" width="200px " alt="video" data-toggle="modal" data-target="#intro5"></a>

                        <!-- Modal -->
                        <div class="modal fade" id="intro5" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered " role="document">
                                <div class="modal-content bg1">
                                    <div class="modal-header">

                                        <button type="button" class="close" data-dismiss="modal" class="btn btn-outline-dark">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                    </div>
                                    <div class="modal-body d-flex flex-column align-items-center">
                                        <h5 class=" flex-grow-1 modal-title  mb-2" id="exampleModalCenterTitle">九頭蛇(Hydra)</h5>
                                        <img src="img/intro3/hydra.jpg" height="200px" width="200px" class="rounded-circle">
                                        <p class="text-center mt-2">九頭蛇是Power Stone群島的兩個首領之一。<br>
                                            九頭蛇是巨型爬行動物，頭上有5個頭，每根脖子上都有一對帆。每個九頭蛇都可以以不同的顏色生成。
                                            <br>
                                            它是遊戲中的第二大生物，並沿其後尾航行。
                                        </p>
                                        <hr class="mt-0">
                                        <p>馴服方式：</p>
                                        <p>
                                            不可馴服!!!
                                        </p>
                                        <p>攻擊方式：</p>
                                        <p>
                                            九頭蛇是一個非常棘手的目標，不建議直接採用。它的攻擊作用範圍很大，即使您躲藏起來也可能擊中您。九頭蛇很慢，會游泳。
                                            您必須對準頭部，頸部以下的任何撞擊都不會產生任何影響。
                                            <br>
                                            殺死九頭蛇的最好方法是將自己棲息在九頭蛇無法觸及的高地上。從那裡開始，您應該至少帶上20弓和2000箭（它們可以是原始的）並開始狙擊九頭蛇的頭部。
                                            您應該仔細計劃攻擊的範圍，因為九頭蛇會在您偷看邊緣時讓您措手不及，這會對您造成致命傷害。
                                            建議攻擊重頭，例如火頭，冰頭或閃電頭。您也可以將九頭蛇放進水中，與火炮從船上射擊。

                                        </p>
                                    </div>
                                    <div class="modal-footer align-self-center ">
                                        <button type="button" class="btn btn-outline-dark " data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-flex flex-column align-items-center mt-3">
                        <!-- Button trigger modal -->
                        <h2 class="mt-3">蛇女</h2>
                        <a class=""><img class="img z-depth-1 rounded border border-danger" src="img/intro3/gorgon.jpg" height="200px" width="200px " alt="video" data-toggle="modal" data-target="#intro6"></a>

                        <!-- Modal -->
                        <div class="modal fade" id="intro6" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered " role="document">
                                <div class="modal-content bg1">
                                    <div class="modal-header">

                                        <button type="button" class="close" data-dismiss="modal" class="btn btn-outline-dark">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                    </div>
                                    <div class="modal-body d-flex flex-column align-items-center">
                                        <h5 class=" flex-grow-1 modal-title  mb-2" id="exampleModalCenterTitle">蛇女(Gorgon)</h5>
                                        <img src="img/intro3/gorgon.jpg" height="200px" width="200px" class="rounded-circle">
                                        <p class="text-center mt-2"> 一個有著蛇體和一個女孩臉的神話生物。蛇女的頭髮是蛇。<br> 一種極具侵略性的生物，會視線攻擊並使用尖叫攻擊。</p>
                                        <hr class="mt-0">
                                        <p>馴服方式：</p>
                                        <p>
                                            不可馴服!!!
                                        </p>
                                        <p>攻擊方式：</p>
                                        <p>
                                            看到敵人時，蛇女尖叫聲使小範圍內的所有敵人癱瘓。同時射擊一個投射物，使所擊中的物體獲得“蛇行”狀態效果。如果您癱瘓了，很可能已經死了。
                                        </p>

                                    </div>
                                    <div class="modal-footer align-self-center ">
                                        <button type="button" class="btn btn-outline-dark " data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-flex flex-column align-items-center my-3">
                        <!-- Button trigger modal -->
                        <h2 class="mt-3">岩石巨人</h2>
                        <a class=""><img class="img z-depth-1 rounded border border-danger" src="img/intro3/rock.jpg" height="200px" width="200px " alt="video" data-toggle="modal" data-target="#intro7"></a>

                        <!-- Modal -->
                        <div class="modal fade" id="intro7" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered " role="document">
                                <div class="modal-content bg1">
                                    <div class="modal-header">

                                        <button type="button" class="close" data-dismiss="modal" class="btn btn-outline-dark">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                    </div>
                                    <div class="modal-body d-flex flex-column align-items-center">
                                        <h5 class=" flex-grow-1 modal-title  mb-2" id="exampleModalCenterTitle">岩石巨人(Rock Elemental)</h5>
                                        <img src="img/intro3/rock.jpg" height="200px" width="200px" class="rounded-circle">
                                        <p class="text-center mt-2">岩石巨人是ATLAS中的怪物之一。
                                            <br> 肩膀上有一些尖刺，並且其主體由漂浮的岩石組成，其顏色要比黑色的深。</p>
                                        <hr class="mt-0">
                                        <p>馴服方式：</p>
                                        <p>
                                            方法將生命值降低到一個較低的水平，然後使用您的快捷欄中的令牌，這會暫時將岩石巨人變成可以訂購和安裝的友好馴服。
                                        </p>
                                        <p>攻擊方式：</p>
                                        <p>
                                            Rock Elemental的攻擊直接從對手那裡被撕毀。

                                            它會向您扔石頭，用拳頭砸碎。

                                            這些攻擊功能強大。
                                        </p>

                                    </div>
                                    <div class="modal-footer align-self-center ">
                                        <button type="button" class="btn btn-outline-dark " data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-flex flex-column align-items-center my-3">
                        <!-- Button trigger modal -->
                        <h2 class="mt-3">鋸齒怪鳥</h2>
                        <a class=""><img class="img z-depth-1 rounded border border-danger" src="img/intro3/razortooth.jpg" height="200px" width="200px " alt="video" data-toggle="modal" data-target="#intro8"></a>

                        <!-- Modal -->
                        <div class="modal fade" id="intro8" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered " role="document">
                                <div class="modal-content bg1">
                                    <div class="modal-header">

                                        <button type="button" class="close" data-dismiss="modal" class="btn btn-outline-dark">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                    </div>
                                    <div class="modal-body d-flex flex-column align-items-center">
                                        <h5 class=" flex-grow-1 modal-title  mb-2" id="exampleModalCenterTitle">鋸齒怪鳥(Razortooth)</h5>
                                        <img src="img/intro3/razortooth.jpg" height="200px" width="200px" class="rounded-circle">
                                        <p class="text-center mt-2">鋸齒怪鳥是一種大型的食肉恐龍，頭部較長，鼻樑上有一個低脊，眼睛上方有一對角。它的身體上覆蓋著厚厚的柔軟的羽毛，長臂，三爪。<br>
                                            九頭蛇是巨型爬行動物，頭上有5個頭，每根脖子上都有一對帆。每個九頭蛇都可以以不同的顏色生成。

                                        </p>
                                        <hr class="mt-0">
                                        <p>馴服方式：</p>
                                        <p>
                                            Razortooth需要熟總理魚肉，熟肉類總理，江淮的牛肉包子，露西的炸魚薯條，亞歷克斯的迷迭香雞肉，豬肉餡餅和史蒂芬的毛絨和烤魚。
                                            強烈建議您將所有七種食物都放入庫存，因為每次您需要餵食時，它都會從上面列出的七種食物中隨機選擇一種食物。
                                            <br>
                                            注意:只有在餵完所需的當前食物後，它才會更改所需的食物。
                                        </p>
                                        <p>攻擊方式：</p>
                                        <p>
                                            鋸齒怪鳥極具侵略性，會殺死所遇到的任何東西。小心翼翼地接近，因為鋸齒怪鳥具有咆哮能力，可以使馴服的坐騎變得懸而未決，無論發出什麼命令，都經常將騎乘的騎手隨身帶走。
                                            <br>
                                            右擊是額骨恐懼症。恐懼的目標會受到額外的傷害。
                                            C減少所有受到的傷害，並使范圍內所有友方馴服（包括盟友的馴服）造成的所有傷害提高25％。

                                        </p>
                                    </div>
                                    <div class="modal-footer align-self-center ">
                                        <button type="button" class="btn btn-outline-dark " data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 d-flex flex-column align-items-center my-3">
                        <!-- Button trigger modal -->
                        <h2 class="mt-3">鈍角龍</h2>
                        <a class=""><img class="img z-depth-1 rounded border border-danger " src="img/intro3/shieldhorn.jpg" height="200px" width="200px " alt="video" data-toggle="modal" data-target="#intro9"></a>

                        <!-- Modal -->
                        <div class="modal fade" id="intro9" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered " role="document">
                                <div class="modal-content bg1">
                                    <div class="modal-header">

                                        <button type="button" class="close" data-dismiss="modal" class="btn btn-outline-dark">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                    </div>
                                    <div class="modal-body d-flex flex-column align-items-center">
                                        <h5 class=" flex-grow-1 modal-title  mb-2" id="exampleModalCenterTitle">鈍角龍(Shieldhorn)</h5>
                                        <img src="img/intro3/shieldhorn.jpg" height="200px" width="200px" class="rounded-circle">
                                        <p class="text-center mt-2"> 長得很像三角龍，類似於方舟的三輪車的羽毛和象牙<br>如果距離太近，會引起騷擾，但攻擊範圍很小。</p>
                                        <hr class="mt-0">
                                        <p>馴服方式：</p>
                                        <p>
                                            需要馴服遊戲中的幾種蔬菜，每次餵他時他都會旋轉食物，您將需要蘿蔔，辣椒，洋蔥，馬鈴薯，胡椒粉，甜菜和食用蔬菜。
                                        </p>
                                        <p>攻擊方式：</p>
                                        <p>
                                            Shieldhorn的前面板將反映射彈損壞，例如箭頭和子彈。
                                            按住鼠標右鍵單擊，將使Shieldhorn“充電”其電源攻擊，如屏幕右側的紅色“頭盔”圖標所示。釋放時，盾牌將向前衝刺。在對目標造成衝擊時會發出超強攻擊。
                                        </p>

                                    </div>
                                    <div class="modal-footer align-self-center ">
                                        <button type="button" class="btn btn-outline-dark " data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
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