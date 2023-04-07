<?php 
    class hanghoa{
        //thuộc tính
        // hàm tạo

        function __construct(){

        }
        // Lấy dữ liệu từ database về để  View lấy nó và hiện thị lên
        // pt lấy ra 12 sản phẩm mới nhất

        function getHangHoaNew(){
            //b1: kết nối với database
            $db =  new connect();
            $select = "select *  from hanghoa ORDER by mahh desc LIMIT 12";
            $result =$db -> getList($select);
            return $result;
        }

        function getHangHoaSale(){
            //b1: kết nối với database
            $db =  new connect();
            $select = "select *  from hanghoa where giamgia > 0 LIMIT 4";
            $result =$db ->getList($select);
            return $result;

        }

        function getHangHoaAll(){
            //b1: kết nối với database
            $db =  new connect();
            $select = "select *  from hanghoa";
            $result =$db ->getList($select);
            return $result;
        }
        public function getHangHoaSaleAll()
        {
            // B1: kết nối được với database
            $db=new connect();
            // B2: viết câu truy vấn
            $select="select * from hanghoa where giamgia>0";
            $result=$db->getList($select);
            return $result; // lấy về được 12 sản phẩm
        }

        function getHangHoaId($id){
            //b1: kết nối với database
            $db =  new connect();
            $select = "select *  from hanghoa where mahh=$id";
            $result =$db ->getInstance($select);
            return $result;
        }

        function getHangHoaNhom($id){
            //b1: kết nối với database
            $db =  new connect();
            $select = "select *  from hanghoa where mahh=$id";
            $result =$db ->getInstance($select);
            return $result;
        }

        function getHangNhom($nhom) {
            //b1: kết nối với database
            $db =  new connect();
            $select = "SELECT DISTINCT mausac, hinh FROM `hanghoa` WHERE nhom=$nhom";
            $result =$db ->getList($select);
            return $result;
        }

        function getHangHoaSize($nhom) {
            //b1: kết nối với database
            $db =  new connect();
            $select = "SELECT DISTINCT size FROM `hanghoa` WHERE nhom=4 ORDER BY size";
            $result =$db->getList($select);
            return $result;
        }

        // ph tìm số sản phẩm
        function getCount()
        {
            $db=new connect();
            $select="select count(*) from hanghoa";
            $result=$db->getInstance($select);
            return $result[0];
        }
        // phân trang dựa vào start và limit
        public function getHangHoaPage($start,$limit)
        {
            // b1: kết nối vs database
            $db=new connect();
            // b2: viết câu truy vấn
            $select="select * from hanghoa limit".$start.",".$limit;
            $result=$db->getList($select);
            return $result;
        }
        public function getHangHoaTimKiem($timkiem)
        {
            //B1 kết nối được với database
            $db=new connect();
            // B2: viết câu truy vấn
            $select="select * from hanghoa where tenhh like '%$timkiem%'";
            // echo $select
            $result=$db->getList($select);//select * from hanghoa ORDER by mahh
            return $result;//lấy về được 12 sản phẩm
        }
    }
?>