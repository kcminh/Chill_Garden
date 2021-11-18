<?php
    
     //nhúng file kết nối

     require_once('./connect.php');


//Thêm dữ liệu
//Lấy dữ liệu trên form => update vào CSDL
        $manv=$_POST['txtmanv']; 
        $tennv=$_POST['txttennv'];
        $gioitinh=$_POST['txtgioitinh'];
        $diachi=$_POST['txtdiachi'];
        $bophan=$_POST['txtbophan'];
        $sdt=$_POST['txtsdt'];
        $email=$_POST['txtemail'];
        $luong=$_POST['txtluong'];
        $sql_update="Update ttnhanvien set tennv='".$tennv."',gioitinh='".$gioitinh."',diachi='".$diachi."',bophan='".$bophan."',sdt='".$sdt."',email='".$email."',luong='".$luong."' where manv = '".$manv."'";
        $result=$conn->query($sql_update);
 if(!$result)
 {
    echo "Lỗi thêm  ".$sql_update."<br>".$conn->error;
 }
 else{
    header('location:viewnhanvien.php');//điều hướng
 }
$conn->close();

?>
