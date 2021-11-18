<?php
   //nhúng file kết nối
   require_once('./connect.php');
   //Thêm dữ liệu
   //Lấy dữ liệu trên form => update vào CSDL
      $manv=$_POST['txtmadv']; 
      $tennv=$_POST['txttendv'];
            $gioitinh=$_POST['txtthanhtien'];
      $sql_update=" Update ttdichvu set tendv='".$tendv."',thanhtien='".$thanhtien."' where madv='".$madv."' ";
      $result=$conn->query($sql_update);
         if(!$result)
         {
            echo "Lỗi thêm ".$sql_update."<br>".$conn->error;
         }
         else{
            header('http://localhost/khachsan/PHP/ttdichvu/danhsachdv.php');//điều hướng
         }
      $conn->close();
?>
