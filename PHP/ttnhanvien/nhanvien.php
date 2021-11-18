<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhân viên</title>
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
    <form action="addnhanvien.php" method="POST" name="fnhanvien">
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
        <h2> QUẢN LÝ THÔNG TIN NHÂN VIÊN </h2>
        <table>
            <tr>
                <td>
                    Mã nhân viên
                </td>
                <td><input class="ip1" type="text" name="txtmanv" required></td>
            </tr>
            <tr>
                <td>
                    Tên nhân viên
                </td>
                <td><input class="ip1" type="text" name="txttennv" required></td>
            </tr>
            <tr>
                <td>
                    Giới tính
                </td>
                <td>
                    <select name="gt">
                        <option value="">Giới Tính</option>
                        <option>Nam</option>
                        <option>Nữ</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Địa chỉ
                </td>
                <td><input class="ip1" type="text" name="txtdiachi" ></td>
            </tr>
            <tr>
                <td>
                    Bộ phận
                </td>
                <td><input class="ip1" type="text" name="txtbophan" ></td>
            </tr>
            <tr>
                <td>
                    Số Điện Thoại
                </td>
                <td><input class="ip1" type="text" name="txtsdt" ></td>
            </tr>
            <tr>
                <td>
                    Email
                </td>
                <td><input class="ip1" type="text" name="txtemail" ></td>
            </tr>
            <tr>
                <td>
                    Lương
                </td>
                <td><input class="ip1" type="text" name="txtluong" ></td>
            </tr>
        </table>
        <button>ADD</button>
    </center>
    </form>
    
</body>
</html>