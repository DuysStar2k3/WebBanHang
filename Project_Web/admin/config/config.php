<?php
    $mysqli = new mysqli("localhost","root","","web_banhang");

    // Check connection
    if ($mysqli -> connect_errno) {
    echo "Error:TRuy xuất lỗi " . $mysqli -> connect_error;
    exit();
    }
?>