<?php

// goi file tuong tac voi csdl
include('../../config/config.php');
	
$tencongty =$_POST['tencongty'];
$email =$_POST['email'];
$password =$_POST['password'];
$diachi =$_POST['diachi'];
$sdt =$_POST['sdt'];
// xử lí hình ảnh
$hinhanh =$_FILES['hinhanh']['name'];
$hinhanh_tmp =$_FILES['hinhanh']['tmp_name'];

// tmp_name biến tạm của hình ảnh

//  thêm
	if(isset($_POST['themct'])){
		 // lay du lieu tu bang
		 $sql_them = "insert into congty(tencongty,email,password,diachi,sdt,hinhanh) VALUE('$tencongty','$email','$password','$diachi','$sdt','$hinhanh') ";
		 // ket noi csdl
		 mysqli_query($mysqli,$sql_them);
		 //phải upload hình ảnh
		 move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
		 header('location:../../index.php?action=qlcongty&query=them');
}
//Sửa
elseif(isset($_POST['suact'])){
	//có chọn hình ảnh khác rỗng
	if($hinhanh!='')
	{
	// lay du lieu tu bang
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
		
		$sql_update = "update congty set tencongty='$tencongty',email='$email',password='$password',diachi='$diachi',sdt='$sdt',hinhanh='$hinhanh'
		 where id='$_GET[id]' ";
		 //xoa anh cu
	$sql="select *from congty where id='$_GET[id]' limit 1";
	 $query=mysqli_query($mysqli,$sql);
	 while($row=mysqli_fetch_array($query)){
		unlink('uploads/'.$row['hinhanh']);
	}
}
else{
	$sql_update = "update congty set tencongty='$tencongty',email='$email',password='$password',diachi='$diachi',sdt='$sdt'
		 where id='$_GET[id]' ";
}
// ket noi csdl
		mysqli_query($mysqli,$sql_update);
		header('location:../../index.php?action=qlcongty&query=them');
}
// xóa
else{
	$id=$_GET['id'];
   $sql="select *from congty where id='$id' limit 1";
	$query=mysqli_query($mysqli,$sql);
	while($row=mysqli_fetch_array($query)){
	   unlink('uploads/'.$row['hinhanh']);
   }
   // $id=$_GET['id_sp'];
	$sql_xoa = "delete from congty where id='$id'";
		 mysqli_query($mysqli,$sql_xoa);
	   header('location:../../index.php?action=qlcongty&query=them');
}

?>
