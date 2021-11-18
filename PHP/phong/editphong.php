<?php
    
     //nhúng file kết nối

     require_once('./connect.php');


//Thêm dữ liệu
//Lấy dữ liệu trên form => update vào CSDL
$maphong=$_POST['txtmaphong'];
$loaiphong=$_POST['txtloaiphong'];
$trangthai=$_POST['txttrangthai'];
$gia=$_POST['txtgia'];

 $sql_update="Update phong set maphong='".$maphong."',loaiphong='".$loaiphong."',trangthai='".$trangthai."',maphong='".$maphong."'";
 $result=$conn->query($sql_update);
 if(!$result)
 {
    echo "Lỗi thêm  ".$sql_update."<br>".$conn->error;
 }
 else{
    header('http://localhost/chillgarden/PHP/phong/viewphong.php');//điều hướng
 }
$conn->close();

?>