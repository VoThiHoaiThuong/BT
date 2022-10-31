<?php  
//  so sánh id_dm của bảng sp vs id_dm của bảng danhmuc
    // $sql_lietkesp="select * from sanpham, danhmuc where sanpham.id_danhmuc=danhmuc.id_danhmuc order by id_sp asc ";
   $sql_lietkeuv="select * from ungvien order by id asc ";
   $query_lietkeuv= mysqli_query($mysqli,$sql_lietkeuv);
?>
<p>Liệt kê ứng viên</p>
<table border="1" width="100%" style="border-collapse: collapse;">
  <tr>
    <th>ID</th>
    <th>Tên ứng viên</th>
    <th>Password</th>
    <th>Email</th>
    <th>Địa chỉ</th>
    <th>Số điện thoại</th>
    <th>Hình ảnh</th>
    <th>Quản lí</th>
</tr>
<?php
$i=0;
// lấy ra từng mảng
while($row= mysqli_fetch_array($query_lietkeuv)){
  $i++;
?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['tenungvien'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['password'] ?></td>
    <td><?php echo $row['diachi'] ?></td> 
    <td><?php echo $row['sdt'] ?></td>
    <td><img src="modules/qlungvien/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
    <td>
         <a href="modules/qlungvien/xuly.php?&id=<?php echo $row['id']?>">Xóa</a>| 
         <a href="?action=qlungvien&query=sua&id=<?php echo $row['id']?>">Sửa</a>
    </td>
  </tr>
  <?php
 
}
?>
</table>

