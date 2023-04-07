<?php
$act = 'dangnhap';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'dangnhap':
        include "./View/login.php";
        break;
    case "dangnhap_action":
        if (isset($_POST['txtusername']) && isset($_POST['txtpassword'])) {
            $user = $_POST['txtusername'];
            $pass = $_POST['txtpassword'];
            $cdau = '#GHRT^6';
            $csau = '!67FGT';
            $crypt = md5($cdau . $pass . $csau);
            $ur = new user();
            $urs = $ur->login($user, $crypt);
            if ($urs == true) {
                $_SESSION['makh'] = $urs['makh'];
                $_SESSION['tenkh'] = $urs['tenkh'];
                $_SESSION['username'] = $urs['username'];
                echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=home"/>';
            } else {
                echo '<script>alert("Đăng nhập không thành công")</script>';
                include "./View/registration.php";
            }
        }
        break;
    case 'logout':
        if (isset($_SESSION['makh'])) {
            unset($_SESSION['makh']);
            unset($_SESSION['tenkh']);
            unset($_SESSION['username']);
            unset($_SESSION['cart']);
        }
        echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=home"/>';
        break;
}
?>