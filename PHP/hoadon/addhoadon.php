<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hóa đơn khách hàng</title>
</head>
<body>
<?php
//nhúng file kết nối
    require_once('./connect.php');
    //Thêm dữ liệu
    //Lấy dữ liệu trên form => Insert vào CSDL
    $tenkh=$_POST['txttenkh'];
    $madp=$_POST['txtmadp'];
    $thoigian=$_POST['txtthoigian'];
    $soluongp=$_POST['txtsoluongp'];
    $thanhtien=$_POST['txtthanhtien'];
    $ptthanhtoan=$_POST['txtptthanhtoan'];
    
    $sql_insert="Insert into hoadon values('".$tenkh."','".$madp."','".$thoigian."','".$soluongp."','".$thanhtien."','".$ptthanhtoan."')";
    $result=$conn->query($sql_insert);
    if($result)
    {
        echo "Thêm dữ liệu thành công";
    }
    else{
    echo "Lỗi thêm  ".$sql_insert."<br>".$conn->error;
    }
    $conn->close();
    header('http://localhost/chillgarden/PHP/hoadon/viewhoadon.php');//điều hướng
?>
</body>
</html>
<!--Đúng-->