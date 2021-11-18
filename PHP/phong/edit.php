<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin phòng</title>
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
    $maphong=$_REQUEST['maphong'];
    $sql_tim="SELECT * FROM phong WHERE maphong='".$maphong."'";
    $result=$conn->query($sql_tim);
    //đọc dữ liệu
    While($row=$result->fetch_assoc()) 
    {
        $maphong=$row['maphong'];
        $loaiphong=$row['loaiphong'];
        $trangthai=$row['trangthai'];
        $gia=$row['gia'];
     
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
    <form action="editphong.php" method="POST">
    <center>
    <h2> SỬA THÔNG TIN PHÒNG </h2>
        <table>
            <tr>
                <td>
                   Mã Phòng
                </td>
                <td><input class="ip1" type="text" name="txtmaphong" value="<?php echo $maphong;?>"></td>
            </tr>
            <tr>
                <td>
                    Loại phòng
                </td>
                <td><input class="ip1" type="text" name="txtloaiphong" value="<?php echo $loaiphong;?>"></td>
            </tr>
            <tr>
                <td>
                    Trạng thái
                </td>
                <td>
                    <select name="txttrangthai">
                        <option value="<?php echo $trangthai;?>">Trạng Thái</option>
                        <option>Còn Phòng</option>
                        <option>Hết Phòng</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Giá
                </td>
                <td><input class="ip1" type="text" name="txtgia"  value="<?php echo $gia;?>"></td>
            </tr>
        </table>
        <button>Save</button>
        
    </center>
    </form>
</body>
</html>