<?php 
    $act='sanpham';
    if(isset($_GET['act'])) {
        $act = $_GET['act'];
    }
    switch($act) {
        case 'sanpham':
            include './View/sanpham.php';
            break;
        case 'khuyenmai':
            include './View/sanpham.php';
            break;
        case 'detail':
            include './View/sanphamchitiet.php';
            break;
        case 'timkiem':
            include './View/sanpham.php';
            break;
        case 'comment':
        if(isset($_POST['comment']))
        {
            $noidung=$_POST['comment'];
            $mahh=$_POST['txtmahh'];
            $makh=$_SESSION['makh'];
            $bl=new binhluan();
            $bl->insertComment($mahh,$makh,$noidung);
        }
        else
        {
            echo '<script> alert("Bạn chưa nhập nội dung comment");</script>';

        }
        include "./View/sanphamchitiet.php";
        break;
    }
?>
