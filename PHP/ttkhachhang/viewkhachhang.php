<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Thông tin khách hàng</title>
    <!-- linl CSS -->
    <link rel="stylesheet" href="../ttnhanvien/viewnhanvien.css">
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
    //kết nối
    require_once('./connect.php');
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
    <center>
    <h2>DANH SÁCH THÔNG TIN KHÁCH HÀNG</h2>
    <form action='' method='POST'>
        <input class="ip1" type='text' name='txtkey' placeholder="Nhập mã khách hàng"> 
        <input class="bt1" type='submit' value='Search'>
        <input class="bt1" type="button" value="Refresh" onclick="window.location.href='viewkhachhang.php'">
    </form>
    <?php
    if(isset($_POST['txtkey'])&& !empty($_POST['txtkey']))
    {
        $makh=$_POST['txtkey'];
        $sql_select="SELECT * FROM ttkhachhang where makh='".$makh."'";
    }
    else{
        $sql_select="SELECT * FROM ttkhachhang ";
    }
    $result=$conn->query($sql_select); //thực hiện
    ?>
    <?php
//để đọc dữ liệu =>vòng lặp=>while=>mảng
//trình bày dữ liệu trong Table
    echo "<table>";
        echo "<tr>";
            echo "<td>Mã khách hàng</td>";
            echo "<td>Tên khách hàng</td>";
            echo "<td>Email</td>";
            echo "<td>Địa chỉ</td>";
            echo "<td>Số điện thoại</td>";
            echo "<td>Căn cước công dân</td>";
            echo "<td colspan='2'><a href='khachhang.php'>ADD</a></td>";
        echo "</tr>";
        $i=0;
        while($row=$result->fetch_assoc()){
            $i=$i+1; $makh=$row['makh'];
        echo "<tr>";
            echo "<td>".$row['makh']."</td>";
            echo "<td>".$row['tenkh']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['diachi']."</td>";
            echo "<td>".$row['sdt']."</td>";
            echo "<td>".$row['cccd']."</td>";
            echo "<td><a href='edit.php?makh=$makh'>Edit</td>";
            echo "<td><a href='deletekhachhang.php?makh=$makh'>Del</td>";
        }
    echo "</table>";
    echo "</center>";
//đóng kết nối
$conn->close();
?>
</center>
</body>
</html>