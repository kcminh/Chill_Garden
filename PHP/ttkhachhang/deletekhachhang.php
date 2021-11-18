<?php
//kết nối
    require_once('./connect.php');
     $makh=$_REQUEST['makh'];
    //xóa với mã lấy được
    $dsql_del="DELETE FROM ttkhachhang WHERE makh='".$makh."'";
    $result=$conn->query($dsql_del);
    if(!$result){
        echo "Lỗi xóa".$dsql_del;
    }
    else{
        header('http://localhost/chillgarden/PHP/ttkhachhang/viewkhachhang.php');//điều hướng
    }
?>