<?php
     //nhúng file kết nối
     require_once('./connect.php');
//Thêm dữ liệu
//Lấy dữ liệu trên form => update vào CSDL
$makh=$_POST['txtmakh'];
$tenkh=$_POST['txttenkh'];
$email=$_POST['txtemail'];
$diachi=$_POST['txtdiachi'];
$sdt=$_POST['txtsdt'];
$cccd=$_POST['txtcccd'];

$sql_update="Update ttkhachhang set makh='".$makh."',tenkh='".$tenkh."',email='".$email."',diachi='".$diachi."',sdt='".$sdt."',cccd='".$cccd."' where makh='".$makh."'";
$result=$conn->query($sql_update);
if(!$result)
{
   echo "Lỗi thêm  ".$sql_update."<br>".$conn->error;
}
else{
   header('http://localhost/chillgarden/PHP/ttkhachhang/viewkhachhang.php');//điều hướng
}
$conn->close();

?>