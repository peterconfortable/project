<?php
require_once('sql.php');
?>
<?php
switch ($_GET['do']) {
    case 'carouselchg':
        $rows = select("p2_carousel", "id=" . $_GET['id']);
?>
        <form action="api.php?do=<?= $_GET['do'] ?>&id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data" style="height:70%" class="d-flex flex-column  align-items-center">
            <h2 class=" my-3">修改輪播區圖片</h2>
            <div class="  ">
                <p class="text-center"> 輪播區圖片：</p>
                <input type="file" name="img" class="border border-dark" onchange="readURL(this)" targetID="curimg">
            </div>
            <div class="mt-3 d-flex justify-content-center">
                <img id="curimg" style="width:50% ;height:80%;" src="#">
            </div>
            <div>
                <input type="submit" value="修改">
                <input type="reset" value="重置">
            </div>
        </form>
    <?php
        break;

    case 'aadminadd':
    ?>
        <form action="api.php?do=<?= $_GET['do'] ?>" method="post" enctype="multipart/form-data" class="d-flex flex-column  align-items-center">
            <h2 class=" mt-5 mb-3">新增管理者帳號</h2>
            <hr>
            <div class="d-flex flex-column align-items-end">
                <p> 帳號：<input type="text" name="acc"></p>
                <p> 密碼：<input type="password" name="pwd"></p>
                <p> 確認密碼：<input type="password" name="check"></p>
            </div>
            <p class="">
                <input type="submit" value="新增">
                <input type="reset" value="重置">
            </p>

        </form>
    <?php
        break;

    case 'afooteradd':
    ?>
        <form action="api.php?do=<?= $_GET['do'] ?>" method="post" enctype="multipart/form-data" class="d-flex flex-column  align-items-center">
            <h2 class=" mt-5 mb-3">新增頁尾資料</h2>
            <hr>
            <div class="d-flex flex-column align-items-center">
                <p> 頁尾版權文字：<input type="text" name="text"></p>
                <p> 頁尾圖片：<input type="file" name="img" class="border border-dark" onchange="readURL(this)" targetID="footer2img"></p>
                <img id="footer2img" style="width:50% ;height:80%;" src="#">

            </div>
            <p class="">
                <input type="submit" value="新增">
                <input type="reset" value="重置">
            </p>

        </form>

    <?php
        break;
    case 'afooterchg':
    ?>
        <form action="api.php?do=<?= $_GET['do'] ?>&id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data" style="height:70%" class="d-flex flex-column  align-items-center">
            <h2 class=" my-3">頁尾圖片</h2>
            <div class="  ">
                <p class="text-center"> 頁尾圖片：</p>
                <input type="file" name="img" class="border border-dark" onchange="readURL(this)" targetID="footer1img">
            </div>
            <div class="mt-3 d-flex justify-content-center">
                <img id="footer1img" style="width:50% ;height:80%;" src="#">
            </div>
            <div>
                <input type="submit" value="修改">
                <input type="reset" value="重置">
            </div>
        </form>

    <?php
        break;
    case 'newadd':
    ?>

        <form action="api.php?do=<?= $_GET['do'] ?>" method="post" enctype="multipart/form-data" class="d-flex flex-column  align-items-center">
            <h2 class=" mt-5 mb-3">新增活動公告資料</h2>
            <hr>
            <div class="d-flex flex-column align-items-center">
                <p> 活動公告標題文字：<input type="text" name="text"></p>
                <p> 活動公告內容文字：<input type="text" name="text"></p>
                <p> 活動公告圖片：<input type="file" name="img" class="border border-dark" onchange="readURL(this)" targetID="newimg"></p>
                <img id="newimg" style="width:50% ;height:80%;" src="#">
                <br>
                <p> 活動公告連結：<input type="text" name="text"></p>
            </div>
            <p class="">
                <input type="submit" value="新增">
                <input type="reset" value="重置">
            </p>
        </form>

    <?php
        break;
    case 'newchg':
    ?>

        <form action="api.php?do=<?= $_GET['do'] ?>&id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data" style="height:70%" class="d-flex flex-column  align-items-center">
            <h2 class=" my-3">活動公告圖片</h2>
            <div class="  ">
                <p class="text-center"> 活動公告圖片：</p>
                <input type="file" name="img" class="border border-dark" onchange="readURL(this)" targetID="new1img">
            </div>
            <div class="mt-3 d-flex justify-content-center">
                <img id="new1img" style="width:50% ;height:80%;" src="#">
            </div>
            <div>
                <input type="submit" value="修改">
                <input type="reset" value="重置">
            </div>
        </form>
    <?php
        break;

    case 'new2add':
    ?>

        <form action="api.php?do=<?= $_GET['do'] ?>" method="post" enctype="multipart/form-data" class="d-flex flex-column  align-items-center">
            <h2 class=" mt-5 mb-3">新增系統公告資料</h2>
            <hr>
            <div class="d-flex flex-column align-items-center">
                <p> 系統公告文字：<input type="text" name="text"></p>
                <p> 系統公告時間：<input type="date" name="date"></p>                
                
            </div>
            <p class="">
                <input type="submit" value="新增">
                <input type="reset" value="重置">
            </p>
        </form>

<?php
        break;
}
?>




<script>
    function readURL(input) {

        if (input.files && input.files[0]) {

            var imageTagID = input.getAttribute("targetID");

            var reader = new FileReader();

            reader.onload = function(e) {

                var img = document.getElementById(imageTagID);

                img.setAttribute("src", e.target.result)

            }

            reader.readAsDataURL(input.files[0]);

        }

    }
</script>