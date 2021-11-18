<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phòng</title>
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
    <form action="addphong.php" method="POST" name="phong">
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
        <h2> QUẢN LÝ THÔNG TIN PHÒNG </h2>
        <table>
            <tr>
                <td>
                    Mã phòng
                </td>
                <td><input class="ip1" type="text" name="txtmaphong" required></td>
            </tr>
            <tr>
                <td>
                    Loại phòng
                </td>
                <td><input class="ip1" type="text" name="txtloaiphong" required></td>
            </tr>
            <tr>
                <td>
                    Trạng thái
                </td>
                <td>
                    <select name="txttrangthai">
                        <option value="">Trạng Thái</option>
                        <option>Còn Phòng</option>
                        <option>Hết Phòng</option>
                    </select>
                </td>
            </tr>
            
                <td>
                    Giá
                </td>
                <td><input class="ip1" type="text" name="txtgia" ></td>
            </tr>
        </table>
        <button>ADD</button>
    </center>
    </form>
</body>
</html>
