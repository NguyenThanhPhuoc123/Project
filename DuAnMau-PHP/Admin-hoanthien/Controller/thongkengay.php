<?php
  $act="thongkengay";
  if(isset($_GET['act']))
  {
    $act=$_GET['act'];
  }
  switch($act){
      case 'thongkengay':
        include "./View/thongkengay.php";
        break;

        default:
        #code....
        break;
  }
 ?>