<!-- quảng cáo -->
<?php
  include "quangcao.php";
  // b1: tìm số record trong database tức là tìm tổng số sp
  $hh=new hanghoa();
  //cách 1: count
  // $count=$hh->getCount();//19
  // cách 2: rowCount()
  $result=$hh->getHangHoaAll();//$result là bảng dạng mảng 
  $count=$result->rowCount();//19
  //b2: giới hạn số sp trên trang, tự cho
  $limit=8;
  //b3: tính tổng số trang dựa vào $count và $limit, tính start
  $p=new page();
  //gọi tổng số trang 
  $page=$p->findPage($count,$limit);
  //gọi start re
  $start=$p->findStart($limit);//8
  //b4: gán lấy trang hiện tại 
  $current_page=isset($_GET['page'])?$_GET['page']:1;
  
  ?>
  
  <!-- end quảng cáo -->
  
  
  <!-- end số lượt xem san phẩm -->
  <!-- sản phẩm-->
    <?php
    if(isset($_GET['act']))
    {
        if(isset($GET['act'])=="khuyenmai")
        {
            $ac=0;
        }
        if(isset($_GET['act'])=="timkiem")
        {
            $ac=2;
        }
        else{
            $ac=1;
            }
    }
    else{
        $ac=3;
    }
    ?>

  <!--Section: Examples-->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-right">
            <?php
            if($ac==1)
            {
                echo '<h3 class="mb-5 font-weight-bold" style="color: red;">TẤT CẢ CÁC SẢN PHẨM</h3>';
            }
            if($ac==2)
            {
                echo '<h3 class="mb-5 font-weight-bold" >SẢN PHẨM TÌM KIẾM</h3>';
            }
            else{
                echo '<h3 class="mb-5 font-weight-bold" style="color: red;">Sản phẩm khuyến mãi</h3>';
            }
            ?>
          
          </div>

      </div>
      <!--Grid row-->
      <div class="row">
      <?php
            $hh = new hanghoa();
            $results = $hh->getHangHoaAll();
            $j = 1;
            if($ac==1)
            {
                $result=$hh->getHangHoaPage($start,$limit);
            }
            if($ac==2)
            {
                if(isset($_POST['txtsearch']))
                {
                    $tk=$_POST['txtsearch'];//gót
                    $result=$hh->getHangHoaTimKiem($tk);
                }
            }
            else
            {
                $result=$hh->getHangHoaSaleAll();
            }
            while ($set = $result->fetch()) :
            ?>
              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-left">

                <div class="view overlay z-depth-1-half">
                     <img src="<?php echo 'Content/imagetourdien/' . $set['hinh'] ?>" class="img-fluid" alt="">
                <div class="mask rgba-white-slight"></div>
                </div>
                <?php
                    if($ac==1)
                    {
                        echo'<h5 class="my-4 font-weight-bold" style="color:red">'.
number_format($set['dongia']).'<sup><u>đ</u></sup>
                        </h5>';
                    }
                    else
                    {
                        echo'<h5 class="my-4 font-weight-bold">
                        <font color="red">'.number_format($set['dongia']).'<sup><u>đ</u></sup></font>
                        <strike>'.number_format($set['dongia']).'</strike><sup><u>đ</u></sup>
                        </h5>';
                    }
                ?>

                
            </h5>

            <a href="index.php?action=sanpham&act=detail&id=<?php echo $set['mahh'] ?>">
            <span><?php echo $set['tenhh'];?></span></br></a>
                <button class="btn btn-danger" id="may4" value="lap 4">New</button>
                <h5>Số lượt xem:<?php echo $set['soluotxem'];?></h5>
        </div>
        <?php
                if ($j % 4 == 0) {
                    echo '</div> <div class="row">';
                }
                $j++;
            endwhile;
            ?>
      </div>

      <!--Grid row-->

  </section>
 
  
  <!-- end sản phẩm mới nhất -->
  
 
  <div class="col-md-6 div col-md-offset-3">
				<ul class="pagination">
					
                <?php
                    //nút lùi khi trang hiện tại >1 và tổng số trang >1
                        if($current_page>1 && $page>1)
                        {
                            echo '<li ><a href="index.php?action=sanpham&page='.($current_page-1).'">Prev</a></li>';

                        }
                        for($i=1;$i<=$page;$i++)
                        {
                    ?>
                            <li ><a href="index.php?action=sanpham&page=<?php echo $i;?>"><?php echo $i;?></a></li>
                    <?php
                        }
                        //nút tới
                        if($current_page<$page && $page>1)
                        {
                            echo '<li ><a href="index.php?action=sanpham&page='.($current_page+1).'">Next</a></li>';
                            
                        }
				    ?>
				   
				</ul>
</div>