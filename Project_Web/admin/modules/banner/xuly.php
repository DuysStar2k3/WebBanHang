<?php
include('../../config/config.php');
$tenbanner = $_POST["tenbanner"];
//Xứ lý hình ảnh
$hinhanh = $_FILES["hinhanh"]["name"];
$hinhanh_tmp = $_FILES["hinhanh"]["tmp_name"];
$hinhanh = time() . '_' . $hinhanh;
//THEM
if (isset($_POST["thembanner"])) {
    $sql_them = "INSERT INTO tbl_banner(tenbanner,hinhanh) 
    VALUE('" . $tenbanner . "','" . $hinhanh . "')";
    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($hinhanh_tmp, "img_banner/" . $hinhanh);
    header('Location:../../index.php?action=quanlybanner&query=them');
} else {
    //Xóa
    
    // $sql_xoa="DELETE FROM tbl_banner WHERE id_banner='".$id."'";
    // mysqli_query($mysqli,$sql_xoa);
    // header('Location:../../index.php?action=quanlybanner&query=them');
    // $id = $_GET['idsanpham'];
    $id=$_GET['idbanner'];
    $sql = "SELECT * FROM tbl_banner WHERE id_banner ='$id' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('img_banner/' . $row['hinhanh']);
    }
    $sql_xoa = "DELETE FROM tbl_banner WHERE id_banner='" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../../index.php?action=quanlybanner&query=them');
}
