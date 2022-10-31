<?php
$host='localhost';
$userhost='root';
$password='';
$csdl='web_timkiem';
// Create connection
// Check connection
$mysqli = new mysqli($host,$userhost,$password,$csdl) or die("kết nối CSDL không thành công");
?>