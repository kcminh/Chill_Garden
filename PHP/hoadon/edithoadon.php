<?php
    
     //nhúng file kết nối

     require_once('./connect.php');


//Thêm dữ liệu
//Lấy dữ liệu trên form => update vào CSDL
$tenkh=$_POST['txttenkh'];
$madp=$_POST['txtmadp'];
$thoigian=$_POST['txtthoigian'];
$soluongp=$_POST['txtsoluongp'];
$thanhtien=$_POST['txtthanhtien'];
$ptthanhtoan=$_POST['txtptthanhtoan'];

$sql_update="Update hoadon set tenkh='".$tenkh."',madp='".$madp."',thoigian='".$thoigian."',soluongp='".$soluongp."',thanhtien='".$thanhtien."',ptthanhtoan='".$ptthanhtoan."' where tenkh='".$tenkh."'";
$result=$conn->query($sql_update);
if(!$result)
{
   echo "Lỗi thêm  ".$sql_update."<br>".$conn->error;
}
else{
   header('http://localhost/chillgarden/PHP/hoadon/viewhoadon.php');//điều hướng
}
$conn->close();

?>
