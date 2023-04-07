<?php
class binhluan
{
  function __construct()
  {
  }
  function insertComment($mahh, $makh, $noidung)

  {
    $db = new connect();
    $date = new DateTime("now");
    $datecreate = $date->format("Y-m-d");
    $query = "insert into binhluan1(mabl,mahh,makh,ngaybl,noidung)
          values(Null,$mahh,$makh,'$datecreate','$noidung')";
    $db->exec($query);
  }
  function getCountComment($mahh)
  {
    $db = new connect();
    $select = "select count(mabl) from binhluan1 where mahh=$mahh";
    $result = $db->getInstance($select);
    return $result[0];
  }
  function getNoidungComment($mahh)
  {
    $db = new connect();
    $select = "select a.noidung,a.ngaybl,b.username from binhluan1 a 
    INNER JOIN khachhang1 b on a.makh=b.makh  where a.mahh=$mahh";
    $result = $db->getList($select);
    return $result;
  }
}
?>
