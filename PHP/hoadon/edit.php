<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin hóa đơn</title>
    <!-- linl CSS -->
    <link rel="stylesheet" href="../ttnhanvien/nhanvien.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mohave:wght@500&family=Mulish:ital,wght@1,900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
</head>
<body>
    <div class="ketnoi">
    <!--Trang này sẽ sửa thông tin-->
    <?php
    require_once('./connect.php');
    $tenkh=$_REQUEST['tenkh'];
    $sql_tim="SELECT * FROM hoadon WHERE tenkh='".$tenkh."'";
    $result=$conn->query($sql_tim);
    //đọc dữ liệu
    While($row=$result->fetch_assoc()) 
    {
        $tenkh=$row['tenkh'];
        $madp=$row['madp'];
        $thoigian=$row['thoigian'];
        $soluongp=$row['soluongp'];
        $thanhtien=$row['thanhtien'];
        $ptthanhtoan=$row['ptthanhtoan'];
    }
    ?>
    <!-- Header -->
    <header>
            <div id="main-header" class="cogian">
                <!-- logo -->
                <div id="logoh1">
                    <a href="http://localhost/khachsan/PHP/chillgarden.php">
                        <img src="../img/CG Logo.png" >
                    </a>
                </div>
            </div>
        </header>
    </div>
    <!-- //hiển thị dữ liệu lên giao diện ->form nhập thông tin khoa -> copy from nhập thông tin sang
    //hiển thị dữ liệu vào các value trong các điều khiển -->
    <form action="edithoadon.php" method="POST">
    <center>
    <h2> SỬA THÔNG TIN KHÁCH HÀNG  </h2>
        <table>
            <tr>
                <td>
                   Tên khách hàng
                </td>
                <td><input class="ip1" type="text" name="txttenkh" value="<?php echo $tenkh;?>"></td>
            </tr>
            <tr>
                <td>
                    Mã đặt phòng
                </td>
                <td><input class="ip1" type="text" name="txtmadp"  value="<?php echo $madp;?>"></td>
            </tr>
            <tr>
                <td>
                    Thời gian
                </td>
                <td><input class="ip1" type="text" name="txtthoigian"  value="<?php echo $thoigian;?>"></td>
            </tr>
            <tr>
                <td>
                    Số lượng
                </td>
                <td><input class="ip1" type="text" name="txtsoluongp"  value="<?php echo $soluongp;?>"></td>
            </tr> 
            <tr>
                <td>
                    Thành tiền 
                </td>
                <td><input class="ip1" type="text" name="txtthanhtien"  value="<?php echo $thanhtien;?>"></td>
            </tr>
            <tr>
                <td>
                    Phương thức thanh toán 
                </td>
                <td><input class="ip1" type="text" name="txtptthanhtoan"  value="<?php echo $ptthanhtoan;?>"></td>
            </tr>
        </table>
        <button>Save</button>
    </center>
    </form>
</body>
</html>