<?php
    $mysqli = new mysqli("localhost","root","","db_webbanhang");

    // Check connection
    if ($mysqli -> connect_errno) {
    echo "Error:TRuy xuất lỗi " . $mysqli -> connect_error;
    exit();
    }
?>