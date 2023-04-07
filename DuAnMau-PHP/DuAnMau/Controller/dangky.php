<?php
    $act= "dangky";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }
    switch($act){
        case "dangky":
            include "./View/registration.php";
            break;
        case "dangky_action":
            if(isset($_POST['txttenkh'])){
                $tenkh = $_POST['txttenkh'];
                $diachi = $_POST['txtdiachi'];
                $sodt = $_POST['txtsodt'];
                $username = $_POST['txtusername'];
                $email = $_POST['txtemail'];
                $pass = $_POST['txtpass'];
                $cdau = '#GHRT^6';
                $csau = '!67FGT';
                $crypt = md5($cdau.$pass.$csau);
                $ur = new user();
                $check = $ur->CheckUser($username); 
                {
                    if($check==true) {
                        echo '<script>alert("User đã tồn tại");</script>';
                        include "./View/registration.php";
                    }
                    else {
                        $kt=$ur->InsertUser($tenkh, $username, $crypt, $email, $diachi, $sodt);
                        if ($kt!='false') {
                            echo '<script>alert("Đăng kí thành công");</script>';
                            include "./View/home.php";
                        }
                        else {
                            include "./View/registration.php";
                        }
                    }
                };
            }
    }
?>