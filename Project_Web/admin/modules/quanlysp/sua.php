<?php
$sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sp = '$_GET[idsanpham]' LIMIT 1";
$query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
?>
<p>Sửa danh mục sản phẩm</p>
<table border="1px" width="50%">
    <?php
    while ($row = mysqli_fetch_array($query_sua_sp)) {
    ?>
        <form method="post" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $_GET['idsanpham'] ?>" enctype="multipart/form-data">
            <tr>
                <td>Tên sản phẩm</td>
                <td><input type="text" value="<?php echo $row['tensp'] ?>" name="tensp"></td>
            </tr>
            <tr>
                <td>Mã sản phẩm</td>
                <td><input type="text" value="<?php echo $row['masp'] ?> " name="masp"></td>
            </tr>
            <tr>
                <td>Giá</td>
                <td><input type="text" value="<?php echo $row['giasp'] ?> " name="giasp"></td>
            </tr>
            <tr>
                <td>Số lượng</td>
                <td><input type="text" value="<?php echo $row['soluong'] ?> " name="soluong"></td>
            </tr>
            <tr>
                <td>Hình Ảnh</td>
                <td><input type="file" name="hinhanh">
                    <img style="width: 200px;" src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="">
                </td>
            </tr>
            <tr>
                <td>Tóm tắt</td>
                <td><textarea rows="5" name="tomtat"><?php echo $row['tomtat'] ?></textarea></td>
            </tr>
            <tr>
                <td>Nội dung</td>
                <td><textarea rows="5" name="noidung"><?php echo $row['noidung'] ?></textarea></td>
            </tr>
            <tr>
                <td>Tình Trạng</td>
                <td>
                    <select name="tinhtrang">
                        <?php
                        if ($row['tinhtrang'] == 1) {
                        ?>
                            <option value="1" selected>Kích Hoạt</option>
                            <option value="0">Ẩn</option>
                            <?php
                            } else {
                            ?>
                            <option value="1">Kích Hoạt</option>
                            <option value="0" selected>Ẩn</option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
            </tr>
        </form>
    <?php
    }
    ?>
</table>