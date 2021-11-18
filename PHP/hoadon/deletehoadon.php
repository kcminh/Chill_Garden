<?php
//kết nối
    require_once('./connect.php');
     $tenkh=$_REQUEST['tenkh'];
    //xóa với mã lấy được
    $dsql_del="DELETE FROM hoadon WHERE tenkh='".$tenkh."'";
    $result=$conn->query($dsql_del);
    if(!$result){
        echo "Lỗi xóa".$dsql_del;
    }
    else{
        header('http://localhost/chillgarden/PHP/hoadon/viewhoadon.php');//điều hướng
    }
?>
<!--Đúng-->