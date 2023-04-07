<?php
    class page{
        function findPage($count,$limit)
        {
            $page=(($count%$limit)==0)?$count/$limit:floor($count/$limit)+1;
            return $page;
        }
        // phương thức tính start dựa vào $limit và trang hiện tại
        // trang hiện tại dựa vào URL=index.php?action=sanpha&page=2
        // lấy giá trị trên URL dùng $_GET['page']=>2
        function findStart($limit)
        {
            if(!isset($_GET['page'])||$_GET['page']==1)
            {
                $start=0;
            }
            else
            {
                $start=($_GET['page']-1)*$limit;
            }
            return $start;
        }
    }
?>