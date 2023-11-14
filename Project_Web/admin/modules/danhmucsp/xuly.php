<?php
include('../../config/config.php');
$tenloaisp=$_POST["tendanhmuc"];
$thutu=$_POST["thutu"];
//THEM
if(isset($_POST["themdanhmuc"])){
    $sql_them = "INSERT INTO tbl_danhmuc(tendanhmuc,thutu) VALUE('".$tenloaisp."','".$thutu."')";
    mysqli_query($mysqli,$sql_them);
    header('Location:../../index.php?action=danhmucsp&query=them');
}elseif(isset($_POST["suadanhmuc"])){
//SUA
        $sql_update = "UPDATE tbl_danhmuc SET  tendanhmuc='".$tenloaisp."',thutu='".$thutu."' WHERE id_danhmuc= '$_GET[iddanhmuc]'";
        mysqli_query($mysqli,$sql_update);
        header('Location:../../index.php?action=danhmucsp&query=them');
}else{
// Xóa
    $id=$_GET['iddanhmuc'];
    $sql_xoa="DELETE FROM tbl_danhmuc WHERE id_danhmuc='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('Location:../../index.php?action=danhmucsp&query=them');
} 
?>