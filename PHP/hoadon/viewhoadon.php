<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hóa đơn khách hàng</title>
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
    <h2>HÓA ĐƠN KHÁCH HÀNG</h2>
    <form action='' method='POST'>
        <input class="ip1" type='text' name='txtkey'> 
        <input class="bt1" type='submit' value='Search'>
        <input class="bt1" type="button" value="Refresh" onclick="window.location.href='viewhoadon.php'">
    </form>
<?php
    if(isset($_POST['txtkey'])&& !empty($_POST['txtkey']))
    {
        $tenkh=$_POST['txtkey'];
        $sql_select="SELECT * FROM hoadon where tenkh='".$tenkh."'";
    }
    else{
        $sql_select="SELECT * FROM hoadon ";
    }
    $result=$conn->query($sql_select); //thực hiện
?>
<?php
//để đọc dữ liệu =>vòng lặp=>while=>mảng
//trình bày dữ liệu trong Table
    echo "<table>";
        echo "<tr>";
            echo "<td>Tên khách hàng</td>";
            echo "<td>Mã đặt phòng </td>";
            echo "<td>Thời gian</td>";
            echo "<td>Số lượng phòng</td>";
            echo "<td>Thành tiền</td>";
            echo "<td>Phương thức thanh toán</td>";
            echo "<td colspan='3'><a href='hoadon.php'>ADD</a></td>";
        echo "</tr>";
        $i=0;
        while($row=$result->fetch_assoc()){
            $i=$i+1; $tenkh=$row['tenkh'];
        echo "<tr>";
            echo "<td>".$row['tenkh']."</td>";
            echo "<td>".$row['madp']."</td>";
            echo "<td>".$row['thoigian']."</td>";
            echo "<td>".$row['soluongp']."</td>";
            echo "<td>".$row['thanhtien']."</td>";
            echo "<td>".$row['ptthanhtoan']."</td>";
            echo "<td><a href='edit.php?tenkh=$tenkh'>EDIT</td>";
            echo "<td><a href='deletehoadon.php?tenkh=$tenkh'>DEL</td>";
        }
    echo "</table>";
    echo "</center>";
//đóng kết nối
$conn->close();
?>
</center>
</div>
</div>
</body>
</html>