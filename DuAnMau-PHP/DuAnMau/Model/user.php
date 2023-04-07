<?php
class user
{
    // hàm tạo 
    function __construct()
    {
    }
    // phương thức insert vào bảng khách hàng
    // select là query thực thi 
    // insert, update, delete,... là exec thực thi
    // phương thức thêm
    function InsertUser($tenkh, $user, $matkhau, $email, $diachi, $dt)
    {
        $db = new connect();
        $query = "insert into khachhang1(makh, tenkh, username, matkhau, email, diachi, sodienthoai, vaitro)
            values(NULL, '$tenkh', '$user', '$matkhau', '$email', '$diachi', '$dt', default)";
        $db->exec($query);
    }

    // phương thức login
    function login($username, $password)
    {
        $db = new connect();
        $select = "select * from khachhang1 where username='$username' and matkhau='$password'";
        
        $result = $db->getInstance($select);
        return $result;
    }
    function getEmail($email)
    {
        $db = new connect();
        $select = "select * from khachhang1 where email='$email'";
        $result = $db->getInstance($select);
        return $result;
    }
    function CheckUser($username) {
        $db=new connect();
        $select= "select * from khachhang1 where username='$username'";

        $result=$db->getInstance($select);
        return $result;
    }
    function updateCode($emailold, $codenew)
    {
        $db = new connect();
        $query = "update khachhang1 set matkhau='$codenew' where email='$emailold'";
        $db->exec($query);
    }
}
?>
