<?php
      class hoadon{
        function __construct(){}
        // pt kiểm tra admin
        function getHoaDonAll()
        {
            $db=new connect();
            $select="select * from hoadon1";
            $result=$db->getList($select);
            return $result;
        }
        // pt lấy thông tin của 1 hd
        function getHoaDonID($id)
        {
            $db=new connect();
            $select="select * from hoadon1 where  masohd=$id";
            $result=$db->getInstance($select);
            return $result;
        }
        //pt update mã hd
        function updatehd($masohd,$makh,$ngaydat,$tongtien)
        {
            $db=new connect();
            $query="update hoadon1
                    set makh=$makh,
                    ngaydat='$ngaydat',
                    tongtien=$tongtien
                    where masohd='$masohd';
            ";
            
            $db->exec($query);
        }
        // thêm hd
        function deletehd($id){
            $db=new connect();
            $query="delete from hoadon1 where masohd=$id ";
            $result=$db->exec($query);
            return $result;
        }
        function updatecthd($masohd,$mahh,$soluongmua,$size,$dongia,$thanhtien,$tinhtrang)
        {
            $db=new connect();
            $query="update cthoadon1
                    set mahh=$mahh,
                    soluongmua=$soluongmua,
                    size='$size',
                    dongia=$dongia,
                    thanhtien=$thanhtien,
                    tinhtrang=$tinhtrang
                    where masohd='$masohd';
            ";
            
            $db->exec($query);
        }
        // thêm hd
        function deletecthd($id){
            $db=new connect();
            $query="delete from cthoadon1 where masohd=$id ";
            $result=$db->exec($query);
            return $result;
        }
        function getCTHoaDonAll()
        {
            $db=new connect();
            $select="select * from cthoadon1";
            $result=$db->getList($select);
            return $result;
        }
        // pt lấy thông tin của 1 hd
        function getCTHoaDonID($id)
        {
            $db=new connect();
            $select="select * from cthoadon1 where  masohd=$id";
            $result=$db->getInstance($select);
            return $result;
        }

        function getNamhd(){
            $db=new connect();
            $select="select DISTINCT year(ngaydat) as nam from hoadon1";
            $result=$db->getList($select);
            return $result;
        }
    }
?>