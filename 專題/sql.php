<?php
session_start();
$db = new PDO("mysql:host=127.0.0.1;dbname=php_1080419;charset=utf8", "root", "");
date_default_timezone_set("Asia/Taipei");
//select SQL
function select($tableName, $where)
{
    global $db;
    $sql = "SELECT * FROM " . $tableName . " WHERE " . $where;
    return $db->query($sql)->fetchAll();
}

//insert SQL
function insert($ary, $tableName)
{
    global $db;
    $feild = "id";
    $data = "null";
    foreach ($ary as $key => $value) {
        $feild .= "," . $key;
        $data .= ",'" . $value . "'";
    }
    $sql = "INSERT INTO " . $tableName . " (" . $feild . ") VALUES (" . $data . ")";
    $db->query($sql);
    return $db->lastInsertId();
}

//update SQL
function update($ary, $tableName)
{
    global $db;
    foreach ($ary as $do => $data) {
        switch ($do) {
            case 'num+1':
                $sql = "UPDATE " . $tableName . " SET num=num+1 WHERE id=" . $data; //$data=對象id
                //UPDATE q1t7_total SET num=num+1 WHERE id=1
                $db->query($sql);
                break;
            case 'num-1':
                $sql = "UPDATE " . $tableName . " SET num=num-1 WHERE id=" . $data; //$data=對象id
                $db->query($sql);
                break;
            default:
                foreach ($data as $key => $value) { //$data=陣列內容多筆，單結構為['id']=修改新值
                    $sql = "UPDATE " . $tableName . " SET " . $do . "='" . $value . "' WHERE id=" . $key;
                    //UPDATE q1t7_total SET num=998 WHERE id=1
                    $db->query($sql);
                }
                break;
        }
    }
}

//delete SQL
function delete($ary, $tableName)
{
    global $db;
    foreach ($ary as $do => $data) {
        switch ($do) {
            case 'del':
                foreach ($data as $value) {
                    $sql = "DELETE FROM " . $tableName . " WHERE id=" . $value;
                    echo "<br>";
                    $db->query($sql);
                }
                break;
            case 'delat':
                $sql = "DELETE FROM " . $tableName . " WHERE " . $data;
                $db->query($sql);
                break;
        }
    }
}

//php轉址
function plo($link)
{
    return header("location:" . $link);
}

//JS轉址
function jlo($link)
{
    return "location.href='" . $link . "'";
}

//file upload
function addfile($file)
{
    $newname = time() . "_" . $file['name'];
    copy($file['tmp_name'], "img/" . $newname);
    return $newname;
}
// carouse file upload
function carouseaddfile($file)
{
    $newname = time() . "_" . $file['name'];
    copy($file['tmp_name'], "img/carouseldownload/" . $newname);
    return $newname;
}
//footer file upload
function footeraddfile($file)
{
    $newname = time() . "_" . $file['name'];
    copy($file['tmp_name'], "img/footerdownload/" . $newname);
    return $newname;
}
//new file upload
function newaddfile($file)
{
    $newname = time() . "_" . $file['name'];
    copy($file['tmp_name'], "img/new/" . $newname);
    return $newname;
}


//分頁導覽 pageNav  提供資料表名稱,條件,一頁要幾個,目前在哪頁
function navpage($tableName, $where, $range, $nowpage)
{

    $result = select($tableName, $where);
    $total = count($result);
    $many = ceil($total / $range);

    $pg['<'] = ($nowpage == 1) ? 1 : $nowpage - 1;
    for ($i = 1; $i <= $many; $i++) $pg[$i] = $i;
    $pg['>'] = ($nowpage == $many) ? $many : $nowpage + 1;

    return $pg;
}


// 管理帳號
$rows = select("p1_admin", 1);
// foreach($rows as $row ){
// $r=$row[1];
// print_r($rows);
// print_r($r);
// }
// $re=$rows['id'];
// print_r($re);

$t1_admin = $rows[0]['acc'];


//輪播圖顯示
$rows = select("p2_carousel", "dpy=1");
// print_r($rows);
$t2_img0 = $rows[0]['img'];
$t2_img1 = $rows[1]['img'];
$t2_img2 = $rows[2]['img'];
// print_r($t2_img1);

// FOOTER

$rows = select("p3_footer", "dpy=1");
// print_r($rows);
$t3_img = $rows[0]['img'];
$t3_text = $rows[0]['text'];

//new
