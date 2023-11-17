<?php
$sql_sua_bv = "SELECT * FROM tbl_baiviet WHERE id_baiviet = '$_GET[idbaiviet]' LIMIT 1";
$query_sua_bv = mysqli_query($mysqli, $sql_sua_bv);
// Thực hiện truy vấn UPDATE
if (mysqli_query($mysqli, $sql_sua_bv)) {
    echo "Update thành công!";
} else {
    echo "Lỗi: " . mysqli_error($mysqli);
}
?>
<p class="font-size-24 mg-5">Sửa bài viết</p>
<div class="bg-main-item pd-5 bd-5">

    <table border="1px" width="50%">
        <?php
        while ($row = mysqli_fetch_array($query_sua_bv)) {
        ?>
            <form method="post" action="modules/quanlybviet/xuly.php?idbaiviet=<?php echo $_GET['idbaiviet'] ?>" enctype="multipart/form-data">
                <tr>
                    <td>Tiêu đề</td>
                    <td><input type="text" value="<?php echo $row['tieudebaiviet'] ?> " name="tieudebaiviet"></td>
                </tr>
                <tr>
                    <td>Nội dung</td>
                    <td><textarea class="no-resize" rows="5" name="noidungbaiviet"><?php echo $row['noidungbaiviet'] ?></textarea></td>
                </tr>
                <tr>
                    <td>Hình Ảnh</td>
                    <td><input type="file" name="hinhanh">
                        <img style="width: 200px;" src="modules/quanlybviet/uploads/<?php echo $row['hinhanh'] ?>" alt="">
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2"><input type="submit" name="suabaiviet" value="Sửa bài viết"></td>
                </tr>
            </form>
        <?php
        }
        ?>
    </table>
</div>