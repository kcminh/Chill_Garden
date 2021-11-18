<?php
//kết nối
    require_once('./connect.php');
    $madv=$_REQUEST['madv'];
    //xóa với mã lấy được
    $dsql_del="DELETE FROM ttdichvu WHERE madv='".$madv."'";
    $result=$conn->query($dsql_del);
        if(!$result){
            echo "Lỗi xóa".$dsql_del;
        }
        else{
            header('http://localhost/khachsan/PHP/ttdichvu/danhsachdv.php');//điều hướng
        }
?>