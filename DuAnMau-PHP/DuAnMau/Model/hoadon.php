<?php
class hoadon
{
    public function __construct()
    {

    }
    //phuong thuc insert vao database hoa don
    function insertOrder($makh)
    {
        $date = new DateTime('now');
        $ngay = $date->format('Y-m-d');
        $db=new connect();
        $query ="insert into hoadon1(masohd, makh, ngaydat,tongtien)
        values(Null,$makh,'$ngay',0)";
        echo $query;
        $db->exec($query);
        $seclect="select masohd from hoadon1 order by masohd desc limit 1";
        $mahd = $db->getInstance($seclect);
        return $mahd[0];
    }
    //phuong thuc insert vao bang cthoadon
    function InsertDetailOrder($mahd,$mah,$solung,$mau,$size,$thanhtien){
        $db = new connect();
        $query = "insert into cthoadon1(masohd,mahh,soluongmua,mausac,size,thanhtien,tinhtrang)
        values($mahd,$mah,$solung,'$mau',$size,$thanhtien,0)";
       
        $db->exec($query);
    }
    function updateOder($sohd,$tongtien){
        $db=new connect();
        $query = "update hoadon1 set tongtien=$tongtien where masohd=$sohd";
        $db->exec($query);
    }
    function UpdateTotal($sohd,$tongtien)
        {
            $db=new connect();
            $query="update hoadon1 set tongtien=$tongtien where masohd=$sohd";
            $db->exec($query);
        }
        function getOrder($sohdid)
        {
            $db=new connect();
            $select="select b.masohd,a.tenkh,a.diachi,a.sodienthoai,b.ngaydat from khachhang1 a
            INNER join hoadon1 b on a.makh=b.makh where b.masohd =$sohdid";
            $result=$db->getInstance($select);
            return $result;
        }
        function getOrderDetail($sohdid)
        {
            $db=new connect();
            $select="select a.tenhh,a.dongia,b.mausac,b.size,b.soluongmua,b.thanhtien from hanghoa a
            INNER join cthoadon1 b on a.mahh=b.mahh where b.masohd =$sohdid";
            $result=$db->getList($select);
            return $result;
        }
}
?>