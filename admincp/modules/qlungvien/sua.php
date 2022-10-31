<?php
    $sql_suauv="select * from ungvien where id='$_GET[id]' limit 1 ";
    //limit sửa giới hạn  1 sản phẩm
    $query_suauv= mysqli_query($mysqli,$sql_suauv);
?>
<p>Sửa sản phẩm<p>
<!-- dữ liệu được lấy phụ thuộc vào thuộc tính name và text -->
<table border="1" width="100%"  style="border-collapse: collapse;">
  <!-- Gửi dữ liệu  -->
  <?php
  while($row = mysqli_fetch_array($query_suauv)){
  ?>
  <!-- enctype="multipart/form-data để gửi file qua form bằng pt post -->
<form method="POST" action="modules/qlungvien/xuly.php?id=<?php echo $row['id'] ?>"  enctype="multipart/form-data" >
  <tr>
    <td>Tên ứng viên</td>
    <td><input type="text" value="<?php echo $row['tenungvien'] ?>" name="tenungvien"></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" value="<?php echo $row['email'] ?>" name="email"></td>
  </tr>
  <tr>
    <td>password</td>
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
      <img src="modules/qlungvien/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
  </td>

  </tr>
  
  <tr>
    <td colspan="2"><input type="submit" name="suauv" value=" Sửa ứng viên"> </td>
  </tr>
  </form>
  <?php
  }
  ?>
</table>




