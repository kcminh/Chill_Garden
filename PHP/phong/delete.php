<?php
//kết nối
    require_once('./connect.php');
     $maphong=$_REQUEST['maphong'];
    //xóa với mã lấy được
    $dsql_del="DELETE FROM phong WHERE maphong='".$maphong."'";
    $result=$conn->query($dsql_del);
    if(!$result){
        echo "Lỗi xóa".$dsql_del;
    }
    else{
        header('http://localhost/chillgarden/PHP/phong/viewphong.php');//điều hướng
    }
?>