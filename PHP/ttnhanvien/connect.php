<?php
    $host="localhost";
    $user_name="root";
    $pass="";
    $db_name="chillgarden";

    $conn=new mysqli($host,$user_name,$pass,$db_name);
    if($conn->connect_error){
        echo "Kết Nối Không Thành Công";
        $conn->close;
        exit();
    }
        echo "Kết Nối Thành Công";
?>