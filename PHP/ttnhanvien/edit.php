<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin nhân viên</title>
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
    include_once('connect.php');
    $manv=$_REQUEST['manv'];
    $sql_tim="SELECT * FROM ttnhanvien WHERE manv='".$manv."'";
    $result=$conn->query($sql_tim);
    //đọc dữ liệu
    While($row=$result->fetch_assoc()) 
    {
        $manv=$row['manv'];
        $tennv=$row['tennv'];
        $gioitinh=$row['gioitinh'];
        $diachi=$row['diachi'];
        $bophan=$row['bophan'];
        $sdt=$row['sdt'];
        $email=$row['email'];
        $luong=$row['luong'];
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
    <form action="editnhanvien.php" method="POST">
    <center>
    <h2> SỬA THÔNG TIN NHÂN VIÊN</h2>
        <table>
            <tr>
                <td>
                    Mã nhân viên
                </td>
                <td><input type="text" name="txtmanv" readonly value="<?php echo $manv;?>"></td>
            </tr>
            <tr>
                <td>
                    Tên nhân viên
                </td>
                <td><input type="text" name="txttennv"  value="<?php echo $tennv;?>"></td>
            </tr>
            <tr>
                <td>
                    Giới tính
                </td>
                <td>
                    <select name="gt">
                        <option value="<?php echo $gioitinh;?>">Giới Tính</option>
                        <option>Nam</option>
                        <option>Nữ</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Địa chỉ
                </td>
                <td><input type="text" name="txtdiachi"  value="<?php echo $diachi;?>"></td>
            </tr>
            <tr>
                <td>
                    Bộ Phận
                </td>
                <td><input type="text" name="txtbophan"  value="<?php echo $bophan;?>"></td>
            </tr>
            
            <tr>
                <td>
                    Số điện thoại
                </td>
                <td><input type="text" name="txtsdt"  value="<?php echo $sdt;?>"></td>
            </tr>
            
            <tr>
                <td>
                    Email
                </td>
                <td><input type="text" name="txtemail"  value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td>
                    Lương
                </td>
                <td><input type="text" name="txtluong" value="<?php echo $luong;?>"></td>
            </tr>
        </table>
        <button>Save</button>
    </center>
    </form>
</body>
</html>