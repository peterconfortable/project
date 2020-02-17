<h3 class="mt-3 text-center text-dark">頁尾版權資料管理</h3>
<hr>
<?php
$rows = select("p3_footer", 1);

?>
<form action="api.php?do=afootermdy" method="post">
    <table class="w-100 table">

        <thead class="thead-dark text-center">
            <tr>
                <th>頁尾版權文字</th>
                <th>頁尾圖片</th>
                <th>顯示</th>
                <th>刪除</th>
                <th></th>
            </tr>
        </thead>
        <?php
        $nowpage = (empty($_GET['page'])) ? 1 : $_GET['page'];
        $begin = ($nowpage - 1) * 5;
        $rows = select("p3_footer", 1);
        // print_r($rows);

        foreach ($rows as $row) {
        ?>
            <tbody>
                <tr>
                    <td class="text-center align-middle"><input type="text" name="text[<?= $row['id'] ?>]" value="<?= $row['text'] ?>" style="width: 98%;"></td>
                    <td class="text-center py-2"><img src="img/footerdownload/<?= $row['img'] ?>" width="50px" height="50px"></td>
                    <td class="text-center align-middle">
                        <input type="hidden" name="dpy[<?= $row['id'] ?>]" value="0">
                        <input type="radio" name="radio" value="<?= $row['id'] ?>" <?= ($row['dpy'] == 1) ? "checked" : "" ?>>
                    </td>
                    <td class="text-center align-middle">
                        <input type="checkbox" name="del[]" value="<?= $row['id'] ?>">
                    </td>
                    <td class="text-center align-middle">
                        <input type="button" value="更新圖片" onclick="op('#cover','#cvr','view.php?do=afooterchg&id=<?= $row['id'] ?>')" class="btn btn-info text-white">
                    </td>
                </tr>
            <?php
        }
            ?>
            </tbody>
    </table>
    <table style="margin-top:40px; " class="w-100">
        <tbody>
            <tr>
                <td class="text-center">
                    <input type="button" onclick="op('#cover','#cvr','view.php?do=afooteradd')" value="新增頁尾" class="btn btn-success text-white mr-3"><input type="submit" value="修改確定" class="btn btn-danger text-white mr-3"><input type="reset" value="重置" class="btn btn-dark text-white"></td>
            </tr>

        </tbody>
    </table>


</form>