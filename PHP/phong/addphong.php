<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phòng</title>
</head>
<body>

<?php
//nhúng file kết nối

    require_once('./connect.php');

    //Thêm dữ liệu
    //Lấy dữ liệu trên form => Insert vào CSDL
    $maphong=$_POST['txtmaphong'];
    $loaiphong=$_POST['txtloaiphong'];
    $trangthai=$_POST['txttrangthai'];
    $gia=$_POST['txtgia'];
    
     $sql_insert="Insert into phong values('".$maphong."','".$loaiphong."','".$trangthai."','".$gia."')";
     $result=$conn->query($sql_insert);
     if($result)
     {
         echo "Thêm dữ liệu thành công";
     }
     else{
      echo "Lỗi thêm  ".$sql_insert."<br>".$conn->error;
     }
    $conn->close();
    header('http://localhost/chillgarden/PHP/phong/viewphong.php');//điều hướng

?>
</body>
</html>