<?php
    $sql_suadm="select * from nganhnghe where id_nganhnghe='$_GET[id_nganhnghe]' limit 1 ";
    //limit sửa giới hank 1 sản phẩm
    $query_suadm= mysqli_query($mysqli,$sql_suadm);
?>
<p>Sửa ngành nghề</p>
<!-- dữ liệu được lấy phụ thuộc vào thuộc tính name và text -->
<table border="1" width="50%"  style="border-collapse: collapse;">
  <!-- Gửi dữ liệu  -->
<form method="POST" action="modules/qlnganhnghe/xuly.php?id_nganhnghe=<?php echo $_GET['id_nganhnghe'] ?>">
    <!-- mang them id để biết danh muc xử lí -->
<?php
// lấy ra từng mảng
while($dong= mysqli_fetch_array($query_suadm)){
    
?>
  <tr>
    <td>Tên ngành nghề</td>
    <td><input type="text" value="<?php echo $dong['tennganhnghe']?>" name="tennganhnghe"></td>
  </tr>
  
  <tr>
    <td colspan="2"><input type="submit" name="suadm" value="Sửa ngành nghề"> </td>
  </tr>
  <?php
    }
  ?>
  </form>
</table>
