<h3 class="mt-3 text-center text-dark">輪播區圖片管理</h3>
<hr>
<form action="api.php?do=carouselmdy" method="post">
    <table class="w-100 table">
        <thead class="thead-dark text-center">
            <tr>
                <th width="60%">輪播圖片</th>
                <th width="10%">顯示</th>
                <th></th>
            </tr>
        </thead>
        <?php
        $rows = select("p2_carousel", 1);
        //  print_r($rows);

        foreach ($rows as $row) {
        ?>
            <tbody>
                <tr>
                    <td class="text-center align-middle"><img src="img/carouseldownload/<?= $row['img'] ?>" width="50%" height="15%"></td>
                    <td class="text-center align-self-center align-middle">
                        <input type="hidden" name="dpy[<?= $row['id'] ?>]" value="0">
                        <input type="checkbox" name="dpy[<?= $row['id'] ?>]" value="1" <?= ($row['dpy'] == 1) ? "checked" : "" ?> class="align-middle">
                    </td>
                    <td class="text-center align-middle">
                        <div>
                            <input type="button" value="更新圖片" onclick="op('#cover','#cvr','view.php?do=carouselchg&id=<?= $row['id'] ?>')" class="btn btn-info text-white">
                        </div>
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
                <td class="text-center"><input type="submit" value="修改確定" class="btn btn-danger text-white mr-3"><input type="reset" value="還原重置" class="btn btn-dark text-white"></td>
            </tr>

        </tbody>
    </table>


</form>