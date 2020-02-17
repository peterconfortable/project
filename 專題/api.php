<?php
require_once("sql.php");

switch ($_GET['do']) {
    case 'check':
        // print_r($_POST);  //Arrat([acc] => admin [pwd]=> 1234)
        $result = select("p1_admin", "acc='" . $_POST['acc'] . "' AND pwd='" . $_POST['pwd'] . "'");

        if ($result) {  //驗證帳密成功
            $_SESSION['admin'] = $_POST['acc'];
            plo("admin.php");
        } else {
            echo "<script>alert('帳號密碼錯誤!!');" . jlo('admin_loginpage.php') . "</script>";
        }
        break;

    case 'logout':
        unset($_SESSION['admin']);
        plo("index.php");
        break;

    case 'logout':
        unset($_SESSION['admin']);
        plo("index.php");
        break;

    case 'carouselmdy':
        // print_r($_POST);
        update($_POST, "p2_carousel");
        plo("admin.php");
        break;

    case 'carouselchg':
        // print_r($_POST);
        // print_r($_FILES);
        $change['img'][$_GET['id']] = carouseaddfile($_FILES['img']);
        update($change, "p2_carousel");
        plo("admin.php");

        // print_r($change);
        break;

    case 'aadminadd':
        $result = select("p1_admin", "acc='" . $_POST['acc'] . "'");
        // print_r($result);
        if ($result) {
            echo "<script>alert('帳號已存在，請重新註冊管理帳號');" . jlo('admin.php?do=aadmin') . "</script>";
        } elseif ($_POST['pwd'] != $_POST['check']) {
            echo "<script>alert('密碼不一致，請重新註冊管理帳號');" . jlo('admin.php?do=aadmin') . "</script>";
        } else {
            unset($_POST['check']);
            // print_r($_POST);
            insert($_POST, "p1_admin");
            plo("admin.php?do=aadmin");
        }
        break;

    case 'aadminmdy':
        update($_POST, "p1_admin");
        delete($_POST, "p1_admin");
        plo("admin.php?do=aadmin");
        break;

    case 'afooteradd':
        $_POST['img'] = footeraddfile($_FILES['img']);
        // print_r($_POST);
        insert($_POST, "p3_footer");
        plo("admin.php?do=afooter");
        break;

    case 'afooterchg':
        $post['img'][$_GET['id']] = footeraddfile($_FILES['img']);
        update($post, "p3_footer");
        plo("admin.php?do=afooter");
        break;

    case 'afootermdy':
        $_POST['dpy'][$_POST['radio']] = 1;
        unset($_POST['radio']);
        update($_POST, "p3_footer");
        delete($_POST, "p3_footer");
        plo("admin.php?do=afooter");
        break;

    case 'newadd':
        $_POST['img'] = newaddfile($_FILES['img']);
        // print_r($_POST);
        insert($_POST, "p4_new");
        plo("admin.php?do=anew");
        break;

    case 'newchg':
        $post['img'][$_GET['id']] = newaddfile($_FILES['img']);
        update($post, "p4_new");
        plo("admin.php?do=anew");
        break;

    case 'newmdy':
        update($_POST, "p4_new");
        delete($_POST, "p4_new");
        plo("admin.php?do=anew");
        break;

    case 'new2add':
        // print_r($_POST);
        insert($_POST, "p5_new2");
        plo("admin.php?do=anew2");
        break;

    case 'new2mdy':
        update($_POST, "p5_new2");
        delete($_POST, "p5_new2");
        plo("admin.php?do=anew2");
        break;
};
