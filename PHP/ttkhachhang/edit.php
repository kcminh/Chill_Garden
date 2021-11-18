<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin khách hàng</title>
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
    <?php
    require_once('./connect.php');
    $makh=$_REQUEST['makh'];
    $sql_tim="SELECT * FROM ttkhachhang WHERE makh='".$makh."'";
    $result=$conn->query($sql_tim);
    //đọc dữ liệu
    While($row=$result->fetch_assoc()) 
    {
        $makh=$row['makh'];
        $tenkh=$row['tenkh'];
        $email=$row['email'];
        $diachi=$row['diachi'];
        $sdt=$row['sdt'];
        $cccd=$row['cccd'];
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
    <form action="editkhachhang.php" method="POST">
    <center>
    <h2> SỬA THÔNG TIN KHÁCH HÀNG </h2>
        <table>
            <tr>
                <td>
                    Mã khách hàng
                </td>
                <td><input class="ip1" type="text" name="txtmakh" value="<?php echo $makh;?>"></td>
            </tr>
            <tr>
                <td>
                    Tên khách hàng
                </td>
                <td><input class="ip1" type="text" name="txttenkh" value="<?php echo $tenkh;?>"></td>
            </tr>
            <tr>
                <td>
                    Email
                </td>
                <td><input class="ip1" type="text" name="txtemail" value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td>
                    Địa chỉ
                </td>
                <td><input class="ip1" type="text" name="txtdiachi" value="<?php echo $diachi;?>"></td>
            </tr>
            <tr>
                <td>
                    Số điện thoại
                </td>
                <td><input class="ip1" type="text" name="txtsdt" value="<?php echo $sdt;?>"></td>
            </tr>
            <tr>
                <td>
                    Căn cước công dân
                </td>
                <td><input class="ip1" type="text" name="txtcccd" value="<?php echo $cccd;?>"></td>
            </tr>
        </table>
        <button>Save</button>
    </center>
    </form>
</body>
</html>