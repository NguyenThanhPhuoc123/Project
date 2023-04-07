<style>
    .search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  /* width: 100%; */
  border: 3px solid #00B4CC;
  border-right: none;
  /* padding: 5px;
  height: 20px; */
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  width: 100px;
  height: 36px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

.wrap{
  width: 30%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
<header class="row no-gutters">
    <div  class="bocuc  bocuc_25 "><div class="loprong"><div class="padding "><div class="bocuc  bocuc_12  "><div class="loprong"><div class="padding "><div class="bocuc  bocuc_13  "><div class="loprong"><div class="padding "><span><a href="/"><img class="lazy  anh_1 " data-src="userfiles/img/576418/logo.png" alt="logo" src="userfiles/img/576418/logo.png"></a></span></div></div></div><div class="bocuc  bocuc_14  "><div class="loprong"><div class="padding "><table class="has-block tooltipstered" style="height: 38px; width: 247px; float: right;">
<tbody>
<tr >
<td style="width: 59px;"><img style="float: none;" src="Content/imagetourdien/logo.png" alt="phone"></td>
<td style="width: 210px;"><strong style="color: #d61920; font-weight: normal; font-size: 13px;">TỔNG ĐÀI TƯ VẤN</strong> <strong style="font-size: 25px; color: #00984a;">0912345678</strong></td>
</tr>
</tbody>
</table></div></div></div></div></div></div></div></div></div>
<!-- <section class="col-12" style="height: 150px; background: #FFFFCC;">
<img src="Content/imagetourdien/logo.png" style="height: 150px;"   alt=""> -->
</section>
    <!-- nav san pham -->
    <section  class="col-12" style="height:40px;">
        <div class="col-12" >
            <div class="row">

                <!-- test -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top scrolling-navbar" style="margin-bottom: 0px;">

                    <div class="collapse navbar-collapse" id="basicExampleNav">

                        <!-- Links -->
                        <ul class="navbar-nav mr-auto smooth-scroll">
                            
                        </ul>
                    </div>
                </nav>
                <!-- end test -->
            </div>
        </div>

    </section>
    <!-- dang ky -->
    <section  align="center" class="col-12">
       
            <div style="background: #FFFFCC;" class="col-12">
                
                <div class="row">
                    
                    <nav class="navbar navbar-expand-lg n navbar-light bg-warning" style="margin-bottom: 0px; ">
                    <img align="center" src="Content/imagetourdien/logooo.png" width="200px" height="100px" alt="">

                        <!-- Right -->
                        <ul class="navbar-nav ml-auto">
                            <li>
                                    <form class="form-inline" action="index.php?action=sanpham&act=timkiem" method="post">
                                        <input type="text" class="searchTerm" name="txtsearch" placeholder="Bạn muốn tìm gì?">
                                        <button type="submit" class="searchButton">
                                            Submit
                                        </button>
                                    </form>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-danger navbar-btn" href="index.php" class="nav-link">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                            <?php
                                    if(!isset($_SESSION['makh']))
                                    {
                                        echo '<a href="index.php?action=dangky" class="nav-link ">Đăng Ký</a>';
                                    }
                                ?>
                            </li>
                            <li class="nav-item">
                                <?php
                                    if(!isset($_SESSION['makh']))
                                    {
                                        echo '<a href="index.php?action=dangnhap" class="nav-link">Đăng Nhập</a>';
                                    }
                                ?>
                            </li>
                            <li class="nav-item">
                                <?php
                                    if(isset($_SESSION['makh']))
                                    {
                                        echo '<a href="index.php?action=dangnhap&act=logout" class="nav-link">Đăng Xuất</a>';
                                    }
                                ?>
                               
                            </li>
                            <li>
                                <a href="index.php?action=giohang" class="nav-link"><img src="Content/imagetourdien/giohang.jpg" width="50px" height="40px" alt=""></a>

                            </li>
                            <li>
                                <?php
                                    $dem=0;
                                    if(isset($_SESSION['cart']))
                                    {
                                        $dem=count($_SESSION['cart']);
                                    }
                                    else
                                    {
                                        $dem=0;
                                    }
                                ?>
                                <p style="color: red; margin-top: 20px; margin-left: 0px;">(<?php echo $dem;?>)</p>

                            </li>
                            <li>
                                <?php
                                    if(isset($_SESSION['makh'])&& isset($_SESSION['tenkh'])):
                                        $name=$_SESSION['tenkh'];
                                ?>
                                    <p style="color: red; margin-top: 20px; margin-left: 0px;"><?php echo "Xin chào !".$name;?></p>
                                <?php
                                    else :
                                        echo '<p style="color: red; margin-top: 20px; margin-left: 0px;">'. "Xin chào !".'</p>'
                                ?>
                                <?php
                                    endif;
                                ?>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
       
    </section>


</header>
<!-- dang ky -->

<!-- hinh dộng -->
<div class="row">

    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-fade" data-ride="carousel">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="2"></li>

                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner z-depth-1-half" role="listbox">
                        <!--First slide-->
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="./Content/imagetourdien/s1.jpg" style="height: 550px;" alt=" First slide">
                        </div>
                        <!--/First slide-->
                        <!--Second slide-->
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./Content/imagetourdien/s2.jpg" style="height: 550px;" alt="Second slide">
                        </div>
                        <!--/Second slide-->
                        <!--Third slide-->
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./Content/imagetourdien/s3.jpg" alt="Third slide" style="height: 550px;">
                        </div>

                        <!--/Third slide-->
                    </div>
                    <!--/.Slides-->
                    <!--Controls-->
                    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
                </div>
            </div>
        </div>
       
    </div>
</div>