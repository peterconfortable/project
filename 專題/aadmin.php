<h3 class="mt-3 text-center text-dark">管理者帳號管理</h3>
<hr>
<form action="api.php?do=aadminmdy" method="post">

  <table class="w-100 table">
    <thead class="thead-dark text-center">
      <tr>
        <th>帳號</th>
        <th>密碼</th>
        <th>刪除</th>
      </tr>
    </thead>
    <?php
    $rows = select("p1_admin", "id!=1");
    // print_r($rows);

    foreach ($rows as $row) {
    ?>
      <tbody>
        <tr>
          <td class="text-center align-middle py-2">
            <input style="width: 98%; " type="text" name="acc[<?= $row['id'] ?>]" value="<?= $row['acc'] ?>">
          </td>
          <td class="text-center align-middle">
            <input style="width: 98%; " type="password" name="pwd[<?= $row['id'] ?>]" data-toggle="tooltip" data-placement="right" title="<?= $row['pwd'] ?>" value="<?= $row['pwd'] ?>">
          </td>
          <td class="text-center align-middle">
            <input style="width: 98%; " type="checkbox" name="del[]" value="<?= $row['id'] ?>">
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
              <input type="button" onclick="op('#cover','#cvr','view.php?do=aadminadd')" value="新增帳號" class="btn btn-success text-white">
              <input type="submit" value="修改確定" class="btn btn-danger text-white ">
              <input type="reset" value="還原重置" class="btn btn-dark text-white">
            </td>
          </tr>     
      </tbody>
  </table>


</form>