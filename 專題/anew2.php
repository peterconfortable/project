<h3 class="mt-3 text-center text-dark">系統公告資料管理</h3>
<hr>
<form action="api.php?do=new2mdy" method="post">

    <table class="w-100 table">

        <thead class="thead-dark text-center">
            <tr>
                <th>系統公告</th>
                <th>公告時間</th>
                <th>顯示</th>
                <th>刪除</th>
            </tr>
        </thead>
        <?php

        $nowpage = (empty($_GET['page'])) ? 1 : $_GET['page'];
        $begin = ($nowpage - 1) * 5; //要將nowpage和$begin化成一個公式
        $rows = select("p5_new2", "1 limit " . $begin . ",5"); //$begin=0,5,10  第幾筆開始  nowpage1>0 nowpage2>5 nowpage3>10


        foreach ($rows as $row) {
        ?>
            <tbody>
                <tr>
                    <td class="text-center align-middle">
                        <input type="text" name="text[<?= $row['id'] ?>]" value="<?= $row['text'] ?>" style="width: 98%;">
                    </td>
                    <td class="text-center align-middle">
                        <input type="date" name="date[<?= $row['id'] ?>" value="<?= $row['date'] ?>" style="width: 98%;">
                    </td>
                    <td class="text-center align-middle">
                        <input type="hidden" name="dpy[<?= $row['id'] ?>]" value="0">
                        <input type="checkbox" name="dpy[<?= $row['id'] ?>]" value="1" <?= ($row['dpy'] == 1) ? "checked" : "" ?>>
                    </td>
                    <td class="text-center align-middle">
                        <input type="checkbox" name="del[]" value="<?= $row['id'] ?>">
                    </td>

                </tr>
            <?php
        }
            ?>
            </tbody>
    </table>
    <div style="text-align:center">
        <?php
        $result = navpage("p5_new2", 1, 5, $nowpage);
        // print_r($result);

        foreach ($result as $key => $value) {
            echo'<a class="p-2 font-weight-bold h5" href="?do=anew2&page='.$value.'" style="background:transparent; border:none; color:black;">'.$key.'</a>';
        }
        ?>
    </div>
    <table style="margin-top:40px; " class="w-100">
        <tbody>
            <tr>
                <td class="text-center">
                    <input type="button" onclick="op('#cover','#cvr','view.php?do=new2add')" value="新增系統" class="btn btn-success text-white mr-3"><input type="submit" value="修改確定" class="btn btn-danger text-white mr-3"><input type="reset" value="還原重置" class="btn btn-dark text-white"></td>
            </tr>
        </tbody>
    </table>


</form>