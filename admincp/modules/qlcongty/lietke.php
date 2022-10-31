<?php  
//  so sánh id_dm của bảng sp vs id_dm của bảng danhmuc
    // $sql_lietkesp="select * from sanpham, danhmuc where sanpham.id_danhmuc=danhmuc.id_danhmuc order by id_sp asc ";
   $sql_lietkect="select * from congty order by id asc ";
   $query_lietkect= mysqli_query($mysqli,$sql_lietkect);
?>
<p>Liệt kê công ty</p>
<table border="1" width="100%" style="border-collapse: collapse;">
  <tr>
    <th>ID</th>
    <th>Tên công ty</th>
    <th>Mật khẩu</th>
    <th>Email</th>
    <th>Địa chỉ</th>
    <th>Số điện thoại</th>
    <th>Hình ảnh</th>
    <th>Quản lí</th>
</tr>
<?php
$i=0;
// lấy ra từng mảng
while($row= mysqli_fetch_array($query_lietkect)){
  $i++;
?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['tencongty'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['password'] ?></td>
    <td><?php echo $row['diachi'] ?></td> 
    <td><?php echo $row['sdt'] ?></td>
    <td><img src="modules/qlcongty/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
    <td>
         <a href="modules/qlcongty/xuly.php?&id=<?php echo $row['id']?>">Xóa</a>| 
         <a href="?action=qlcongty&query=sua&id=<?php echo $row['id']?>">Sửa</a>
    </td>
  </tr>
  <?php
 
}
?>
</table>

