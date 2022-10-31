<p>Thêm ứng viên</p>
<!-- dữ liệu được lấy phụ thuộc vào thuộc tính name và text -->

<table border="1" width="100%"  style="border-collapse: collapse;">
  <!-- Gửi dữ liệu  -->
  <!-- enctype="multipart/form-data để gửi file qua form bằng pt post -->
<form method="POST" action="modules/qlungvien/xuly.php"  enctype="multipart/form-data" >
  <tr>
    <td>Tên ứng viên</td>
    <td><input type="text" name="tenungvien"></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" name="email"></td>
  </tr>
  <tr>
    <td>Mật Khẩu</td>
    <td><input type="text" name="password"></td>
  </tr>
  <tr>
    <td>Địa chỉ </td>
    <td><input type="text" name="diachi"></td>
  </tr>
  <tr>
    <td>Số điện thoại </td>
    <td><input type="text" name="sdt"></td>
  </tr>

  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh"></td>
</tr>
  <tr>
    <td colspan="2"><input type="submit" name="themuv" value="Thêm ứng viên"> </td>
  </tr>
  </form>
</table>
