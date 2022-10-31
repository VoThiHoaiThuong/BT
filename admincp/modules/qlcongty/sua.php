<?php
    $sql_suact="select * from congty where id='$_GET[id]' limit 1 ";
    //limit sửa giới hạn  1 sản phẩm
    $query_suact= mysqli_query($mysqli,$sql_suact);
?>
<p>Sửa công ty<p>
<!-- dữ liệu được lấy phụ thuộc vào thuộc tính name và text -->
<table border="1" width="100%"  style="border-collapse: collapse;">
  <!-- Gửi dữ liệu  -->
  <?php
  while($row = mysqli_fetch_array($query_suact)){
  ?>
  <!-- enctype="multipart/form-data để gửi file qua form bằng pt post -->
<form method="POST" action="modules/qlcongty/xuly.php?id=<?php echo $row['id'] ?>"  enctype="multipart/form-data" >
  <tr>
    <td>Tên công ty</td>
    <td><input type="text" value="<?php echo $row['tencongty'] ?>" name="tencongty"></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" value="<?php echo $row['email'] ?>" name="email"></td>
  </tr>
  <tr>
    <td>Mật khẩu</td>
    <td><input type="text" value="<?php echo $row['password'] ?>" name="password"></td>
  </tr>
  <tr>
    <td>Địa chỉ</td>
    <td><input type="text" value="<?php echo $row['diachi'] ?>" name="diachi"></td>
  </tr>
  <tr>
    <td>SDT</td>
    <td><input type="text" value="<?php echo $row['sdt'] ?>" name="sdt"></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td>
      <input type="file" name="hinhanh">
      <img src="modules/qlcongty/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
  </td>

  </tr>
  
  <tr>
    <td colspan="2"><input type="submit" name="suact" value=" Sửa công ty"> </td>
  </tr>
  </form>
  <?php
  }
  ?>
</table>




