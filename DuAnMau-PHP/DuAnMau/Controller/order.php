<?php
//khi insert vao du lieu, thi inser vao bang chua khoa chinh chuoc sau do moi vaof bang chua khoa ngoai
if (isset($_SESSION['makh'])) {

    $hd = new hoadon();
    $sohd = $hd->InsertOrder($_SESSION['makh']);
    $_SESSION['masohd'] = $sohd;
    $tongtien=0;
    foreach($_SESSION['cart'] as $key=>$item)

    {
        //insertOderDetail($mahd,$mah,$solung,$mau,$size,$thanhtien)
        $hd->InsertDetailOrder($sohd,$item['mahh'],$item['soluong'],$item['mausac'],$item['size'],$item['total']);
        $tongtien+=$item['total'];
    }
    $hd->updateTotal($sohd,$tongtien);
    include "./View/order.php";
}
else{
    echo '<script> alert("ban chua dang nnhap");</script>';
    include "./View/login.php";

}
?>