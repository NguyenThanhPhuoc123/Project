<?php
$act = "hoadon";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'hoadon':
        include "./View/hoadon.php";
        break;
    case 'edit_cthd':
        include "./View/editcthoadon.php";
        break;
    case 'edit_hd':
        include "./View/edithoadon.php";
        break;
    case 'cthoadon':
        include "./View/cthoadon.php";
        break;
    case 'edit_action_hd':
        if (isset($_GET['id'])) {
            $masohd = $_GET['id'];
            $makh = $_POST['makh'];
            $ngaydat = $_POST['ngaydat'];
            $tongtien = $_POST['tongtien'];
            // yêu cầu update dựa mã hh
            $hh = new hoadon();
            $check = $hh->updatehd(
                $masohd,
                $makh,
                $ngaydat,
                $tongtien,
            );
            // echo var_dump($check);
            include "./View/hoadon.php";
        }
        break;
    case 'delete_hd':
        if (isset($_GET['id'])) {
            $masohd = $_GET['id'];
            $hh = new hoadon();
            $hh->deletehd($masohd);
            include "./View/hoadon.php";
        }
        break;
    case 'delete_cthd':
        if (isset($_GET['id'])) {
            $masohd = $_GET['id'];
            $hh = new hoadon();
            $hh->deletecthd($masohd);
            include "./View/cthoadon.php";
        }
        break;
    case 'edit_action_cthd':
        if (isset($_GET['id'])) {
            $masohd = $_GET['id'];
            $mahh = $_POST['mahh'];
            $soluongmua = $_POST['soluongmua'];
            $size = $_POST['size'];
            $dongia=$_POST['dongia'];
            $thanhtien=$_POST['thanhtien'];
            $tinhtrang=$_POST['tinhtrang'];
            // yêu cầu update dựa mã hh
            $hh = new hoadon();
            $check = $hh->updatecthd(
                $masohd,
                $mahh,
                $soluongmua,
                $size,
                $dongia,
                $thanhtien,
                $tinhtrang
            );
            // echo var_dump($check);
            include "./View/cthoadon.php";
        }
        break;
}