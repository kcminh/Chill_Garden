<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Xử lý thông tin nhân viên</title>
</head>
</head>
<body>

<?php
//nhúng file kết nối

    require_once('./connect.php');

    //Thêm dữ liệu
    //Lấy dữ liệu trên form => Insert vào CSDL
    $manv=$_POST['txtmanv'];
    $tennv=$_POST['txttennv'];
    $gioitinh=$_POST['gt'];
    $diachi=$_POST['txtdiachi'];
    $bophan=$_POST['txtbophan'];
    $sdt=$_POST['txtsdt'];
    $email=$_POST['txtemail'];
    $luong=$_POST['txtluong'];
    
     $sql_insert="Insert into ttnhanvien values('".$manv."','".$tennv."','".$gioitinh."','".$diachi."','".$bophan."','".$sdt."','".$email."','".$luong."')";
     $result=$conn->query($sql_insert);
     if($result)
     {
         echo "Thêm dữ liệu thành công";
     }
     else{
      echo "Lỗi thêm  ".$sql_insert."<br>".$conn->error;
     }
    $conn->close();
    header('http://localhost/chillgarden/PHP/ttnhanvien/viewnhanvien.php');//điều hướng
?>
</body>
</html>