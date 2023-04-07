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
<form action="" method="post" enctype="multipart/form-data">
          <input type="file" name="file" />
          <input type="submit" name="submit_file" value="Submit">
       </form>
<div class="row">
  <table class="table">
    <thead>
      <tr class="table-primary">
        <th>Mã hàng</th>
        <th>Tên hàng</th>
        <th>Đơn giá</th>
        <th>Giảm giá</th>
        <th>Hình</th>
        <th>Nhóm</th>
        <th>Mã loại</th>
        <th>Đặc biệt</th>
        <th>Số lượt xem</th>
        <th>Ngày lập</th>
        <th>Mô tả</th>
        <th>Số lượng tồn</th>
        <th>Cập nhật</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $hh = new hanghoa();
      $result = $hh->getHangHoaAll();
      while ($set = $result->fetch()) :
      ?>
        <tr>
          <td><?php echo $set['mahh']; ?> </td>
          <td><?php echo $set['tenhh']; ?></td>
          <td><?php echo $set['dongia']; ?></td>
          <td><?php echo $set['giamgia']; ?></td>
          <td><img width="50px" height="50px" src="Content/img/<?php echo $set['hinh']; ?>" /></td>
          <td><?php echo $set['Nhom']; ?></td>
          <td><?php echo $set['maloai']; ?></td>
          <td><?php echo $set['dacbiet']; ?></td>
          <td><?php echo $set['soluotxem']; ?></td>
          <td><?php echo $set['ngaylap']; ?></td>
          <td><?php echo $set['mota']; ?></td>
          <td><?php echo $set['soluongton']; ?></td>
          <td><a href="index.php?action=hanghoa&act=edit&id=<?php echo $set['mahh']; ?>">Cập nhật</a></td>
          <td><a href="index.php?action=hanghoa&act=deletesp&id=<?php echo $set['mahh']; ?>">Xóa</a></td>
        </tr>
      <?php
      endwhile;
      ?>
      
    </tbody>
  </table>
</div>