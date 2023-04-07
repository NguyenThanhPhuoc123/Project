<div  class="col-md-4 col-md-offset-4"></div>
<div class="col-md-4 col-md-offset-4">
  <h3><b>DANH SÁCH HÀNG HÓA</b></h3>
</div>
<div style="display: flex; justify-content: space-around;" class="row col-12">
  <a href="index.php?action=hanghoa&act=themsp">
    <h4>Thêm sản phẩm</h4>
  </a>
  <a href="index.php?action=hanghoa&act=themloaisp">
    <h4>Thêm loại sản phẩm</h4>
  </a>
  <a href="index.php?action=hanghoa&act=hoadon">
    <h4>Hoá đơn</h4>
  </a>
  <a href="index.php?action=hanghoa&act=cthoadon">
    <h4>Chi tiết hoá đơn</h4>
  </a>
  <a href="index.php?action=dangnhap&act=doimk">
    <h4>Đổi mật khẩu</h4>
  </a>
</div>
<div class="row col-12">
</div>
<div class="row">
<table class="table">
    <thead>
      <tr class="table-primary">
        <th>Mã số hóa đơn</th>
        <th>Mã khách hàng</th>
        <th>Ngày đặt</th>
        <th>Tổng tiền</th>
        <th>Cập Nhật</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $hd=new hoadon();
        $result=$hd->getHoaDonAll();
        while($set=$result->fetch()):
      ?>
      <tr>
      <td><?php echo $set['masohd'];?> </td>
        <td><?php echo $set['makh'];?></td>
        <td><?php echo $set['ngaydat'];?></td>
        <td><?php echo $set['tongtien'];?></td>
        <td><a href="">Cập nhật</a></td>
        <td><a href="index.php?action=hoadon&act=delete_hd&id=<?php echo $set['masohd']; ?>">Xóa</a></td>
      </tr>
     <?php
      endwhile;
     ?>
    </tbody>
  </table>
</div>