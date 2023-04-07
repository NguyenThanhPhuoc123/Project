<script type="text/javascript">
function chonsize(a) {
    document.getElementById("size").value = a;

}
</script>
<section>
    <div class="row">
        <div class="col-lg-12 text-center">
            <h3 class="mb-5 font-weight-bold">CHI TIẾT SẢN PHẨM</h3>
        </div>

    </div>
    <article class="col-12">
        <!-- <div class="card"> -->
        <div class="container-fliud">
            <div class="wrapper row">
                <form action="index.php?action=giohang" method="post">
                    <!-- <input type="hidden" name="action" value="giohang&add_cart"/> -->

                    <div class="preview col-md-6">
                        <div class="tab-content">
                            <?php 
                                if(isset($_GET['id'])) {
                                    $id = $_GET['id'];
                                    $dt = new hanghoa();
                                    $results = $dt -> getHangHoaId($id);
                                    $mahh = $results['mahh'];
                                    $tenhh = $results['tenhh'];
                                    $dongia = $results['dongia'];
                                    $hinh = $results['hinh'];
                                    $mota = $results['mota'];
                                    $nhom = $results['Nhom'];
                                }
                           ?>

                            <div class="tab-pane active" id=""><img src="<?php echo 'Content/imagetourdien/'.$hinh;?>"
                                    alt="" width="200px" height="350px">
                            </div>
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <?php 
                                $results= $dt->getHangNhom($nhom);
                                while ($set=$results->fetch()) { 
                            ?>
                            <li class="active">
                                <a href="#<?php echo $set['hinh']; ?>" data-toggle="tab">
                                    <img src="<?php echo 'Content/imagetourdien/'.$set['hinh']; ?>"
                                        alt="Học thiết kế web bán hàng Online">
                                </a>
                            </li>
                            <?php 
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="details col-md-6">
                        <input type="hidden" name="mahh" value="<?php echo $mahh; ?>" />
                        <h3 class="product-title"><?php echo $tenhh?></h3>
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star"></span> <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p class="product-description">
                            <?php echo $mota?>
                        </p>
                        <h4 class="price">Giá bán: <?php echo number_format($dongia)?>đ</h4>

                        
                            Số Lượng:

                            <input type="number" id="soluong" name="soluong" min="1" max="100" value="1" size="10" />
                      

                        <div class="action">

                            <button class="add-to-cart btn btn-default" type="submit" data-toggle="modal"
                                data-target="#myModal">MUA NGAY
                            </button>

                            <a href="http://hocwebgiare.com/" target="_blank"> <button class="like btn btn-default"
                                    type="button"><span class="fa fa-heart"></span></button> </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- </div> -->
    </article>
</section>
<?php
if(isset($_SESSION['makh'])):
    ?>
<section>
    <div class="col-12">
        <div class="row">
            <?php
            $bl= new binhluan();
            $count=$bl->getCountComment($id)
            ?>

<p class="float-left"><b>Bình luận :<?php echo $count;?> </b></p>
<hr>
</div>
<form action="index.php?action=sanpham&act=comment&id=<?php echo $id;?>" method="post">
    <div class="row">

        <input type="hidden" name="txtmahh" value="<?php echo $id ?>" />
        <img src="Content/imagetourdien/people.png" width="50px" height="50px" ; />
        <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment"
            placeholder="Thêm bình luận">  </textarea>
        <input type="submit" class="btn btn-primary" id="submitButton" style="float: right;" value="Bình Luận" />

    </div>

</form>
<div class="row">
    <p class="float-left"><b>Các bình luận</b></p>
    <hr>
</div>
<div class="row">
    <?php
    $result=$bl->getNoidungComment($id);
    while($set=$result->fetch()):
    ?>
    <div class="col-12">
        <div class="row">
            <img src="Content/imagetourdien/people.png" width="50px" height="50px"/>
            <p><?Php echo '<b>'.$set['username'].': </b>'.$set['noidung'];?> </p><br>
        </div>
        </div>
<?php
endwhile;
?>
</div>

</div>

</section>
<?php
endif;
?>
