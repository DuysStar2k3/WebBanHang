<?php
    $mysqli = new mysqli("sql200.ihostfull.com","uoolo_35506633","webnhom2","uoolo_35506633_webbanhang");

    // Check connection
    if ($mysqli -> connect_errno) {
    echo "Error:TRuy xuất lỗi " . $mysqli -> connect_error;
    exit();
    }
?>