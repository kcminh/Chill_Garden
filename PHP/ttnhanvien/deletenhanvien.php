<?php
//kết nối
    require_once('./connect.php');
     $manv=$_REQUEST['manv'];
    //xóa với mã lấy được
    $dsql_del="DELETE FROM ttnhanvien WHERE manv='".$manv."'";
    $result=$conn->query($dsql_del);
    if(!$result){
        echo "Lỗi xóa".$dsql_del;
    }
    else{
        header('http://localhost/chillgarden/PHP/ttnhanvien/viewnhanvien.php');//điều hướng
    }
?>