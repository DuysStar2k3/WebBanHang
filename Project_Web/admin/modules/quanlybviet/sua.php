<?php
$sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sp = '$_GET[idsanpham]' LIMIT 1";
$query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
?>
<p class="font-size-24 mg-5">Sửa bài viết</p>
<div class="bg-main-item pd-5 bd-5">

    <table border="1px" width="50%">
        <?php
        while ($row = mysqli_fetch_array($query_sua_baiviet)) {
        ?>
            <form method="post" action="modules/quanlybv/xuly.php?idbaiviet=<?php echo $_GET['idbaiviet'] ?>" enctype="multipart/form-data">
                <tr>
                    <td>Tiêu đề</td>
                    <td><input type="text" value="<?php echo $row['tieudebv'] ?> " name="tieudebv"></td>
                </tr>
                <tr>
                    <td>Nội dung</td>
                    <td><textarea class="no-resize" rows="5" name="noidung"><?php echo $row['noidung'] ?></textarea></td>
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