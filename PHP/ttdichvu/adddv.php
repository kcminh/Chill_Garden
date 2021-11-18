<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm các dịch vụ mới</title>
</head>
<body>
<?php
//nhúng file kết nối
    require_once('./connect.php');
    //Thêm dữ liệu
    //Lấy dữ liệu trên form => Insert vào CSDL
    $madv=$_POST['txtmadv'];
    $tendv=$_POST['txttendv'];
    $thanhtien=$_POST['txtthanhtien'];
    
    $sql_insert="Insert into ttdichvu values('".$madv."','".$tendv."','".$thanhtien."')";
    $result=$conn->query($sql_insert);
        if($result)
        {
            echo "Thêm dữ liệu thành công";
        }
        else{
        echo "Lỗi thêm  ".$sql_insert."<br>".$conn->error;
        }
    $conn->close();
    header('http://localhost/khachsan/PHP/ttdichvu/viewdv.php');//điều hướng
?>
</body>
</html>