<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hóa Đơn</title>
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
    <form action="addhoadon.php" method="POST" name="fhoadon">
    <center>
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
        <h2> QUẢN LÝ THÔNG TIN KHÁCH HÀNG </h2>
        <table>
            <tr>
                <td>
                    Tên khách hàng 
                </td>
                <td><input class="ip1" type="text" name="txttenkh" required></td>
            </tr>
            <tr>
                <td>
                    Mã đặt phòng 
                </td>
                <td><input class="ip1" type="text" name="txtmadp" required></td>
            </tr>
            <tr>
                <td>
                    Thời gian
                </td>
                <td><input class="ip1" type="text" name="txtthoigian" ></td>
            </tr>
            <tr>
                <td>
                    Số lượng
                </td>
                <td><input class="ip1" type="text" name="txtsoluongp" ></td>
            </tr>
            <tr>
                <td>
                    Thành tiền 
                </td>
                <td><input class="ip1" type="text" name="txtthanhtien" ></td>
            </tr>
            <tr>
                <td>
                    Phương thức thanh toán
                </td>
                <td><input class="ip1" type="text" name="txtptthanhtoan" ></td>
            </tr>
        </table>
        <button>ADD</button>
    </center>
    </form>
 
</select>
</body>
</html>