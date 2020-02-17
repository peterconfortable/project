<h3 class="mt-3 text-center text-dark">活動公告資料管理</h3>
<hr>
<form action="api.php?do=newmdy" method="post">
    <table class="w-100 table">

        <thead class="thead-dark text-center">
            <tr>
                <th>活動圖片</th>
                <th>活動標題</th>
                <th>活動內文</th>
                <th>活動連結</th>
                <th>顯示</th>
                <th>刪除</th>
                <th></th>
            </tr>
        </thead>
        <?php
        $nowpage = (empty($_GET['page'])) ? 1 : $_GET['page'];
        $begin = ($nowpage - 1) * 5;
        $rows = select("p4_new", "1 limit " . $begin . ",5");
        // print_r($rows);

        foreach ($rows as $row) {
        ?>
            <tbody>
                <tr>
                    <td class="text-center align-middle"><img src="img/new/<?= $row['img'] ?>" width="150px" height="75px"></td>
                    <td class="text-center align-middle"><input type="text" name="title[<?= $row['id'] ?>]" value="<?= $row['title'] ?>"></td>
                    <td class="text-center align-middle"><input type="text" name="text[<?= $row['id'] ?>]" value="<?= $row['text'] ?>"></td>
                    <td class="text-center align-middle"><input type="text" name="link[<?= $row['id'] ?>]" value="<?= $row['link'] ?>"></td>
                    <td class="text-center align-middle">
                        <input type="hidden" name="dpy[<?= $row['id'] ?>]" value="0">
                        <input type="checkbox" name="dpy[<?= $row['id'] ?>]" value="1" <?= ($row['dpy'] == 1) ? "checked" : "" ?>>
                    </td>
                    <td class="text-align align-middle">
                        <input type="checkbox" name="del[]" value="<?= $row['id'] ?>">
                    </td>
                    <td class="text-align align-middle">
                        <input type="button" value="更新圖片" onclick="op('#cover','#cvr','view.php?do=newchg&id=<?= $row['id'] ?>')" class="btn btn-info text-white">
                    </td>
                </tr>
            <?php
        }
            ?>
            </tbody>
    </table>
    <div style="text-align:center">
        <?php
        $result = navpage("p4_new", 1, 5, $nowpage);
        // print_r($result);

        foreach ($result as $key => $value) {
            echo '<a class="p-2 font-weight-bold h5" href="?do=anew&page=' . $value . '" style="background:transparent; border:none; color:black;">' . $key . '</a>';
        }
        ?>
    </div>
    <table style="margin-top:40px; " class="w-100">
        <tbody>

            <tr>
                <td class="text-center">
                    <input type="button" onclick="op('#cover','#cvr','view.php?do=newadd')" value="新增公告" class="btn btn-success text-white mr-3">
                    <input type="submit" value="修改確定" class="btn btn-danger text-white mr-3">
                    <input type="reset" value="還原重置" class="btn btn-dark text-white">
                </td>
            </tr>
        </tbody>
    </table>


</form>