<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin dịch vụ</title>
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
    $madv=$_REQUEST['madv'];
    $sql_tim="SELECT * FROM ttdichvu WHERE madv='".$madv."'";
    $result=$conn->query($sql_tim);
    //đọc dữ liệu
    While($row=$result->fetch_assoc()) 
    {
       
        $madv=$row['madv'];
        $tendv=$row['tendv'];
        $thanhtien=$row['thanhtien'];
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
    <form action="editdichvu.php" method="POST">
    <center>
    <h2> Sửa thông tin dịch vụ </h2>
        <table>
            <tr>
                <td>
                    Mã dịch vụ
                </td>
                <td><input class="ip1" type="text" name="txtmadv" readonly value="<?php echo $madv;?>"></td>
            </tr>
            <tr>
                <td>
                    Tên dịch vụ
                </td>
                <td><input class="ip1" type="text" name="txttendv" readonly value="<?php echo $tendv;?>"></td>
            </tr>
            <tr>
                <td>
                    Thành tiền
                </td>
                <td><input class="ip1" type="text" name="txtthanhtien" readonly value="<?php echo $thanhtien;?>"></td>
            </tr>
        </table>
        <button>Save</button>
    </center>
    </form>
</body>
</html>