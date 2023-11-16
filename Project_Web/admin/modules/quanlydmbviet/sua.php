<?php
$sql_sua_danhmucbv = "SELECT * FROM tbl_danhmucbv WHERE id_danhmuc = '$_GET[iddanhmuc]' LIMIT 1";
$query_sua_danhmucbv = mysqli_query($mysqli, $sql_sua_danhmucbv);
?>
<p class="font-size-24 mg-5">Sửa danh mục sản phẩm</p>
<div class="bg-main-item pd-5 bd-5">
    <table border="1px" width="50%">
        <form method="post" action="modules/quanlydmbviet/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
            <?php
            while ($dong = mysqli_fetch_array($query_sua_danhmucbv)) {
            ?>
                <tr>
                    <td>Tên danh mục</td>
                    <td><input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmucbv"></td>
                </tr>
                <tr>
                    <td>Thứ tự</td>
                    <td><input type="text" value="<?php echo $dong['thutu'] ?>" name="thutubv"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="suadanhmucbv" value="Sửa danh mục"></td>
                </tr>
            <?php
            }
            ?>
        </form>
    </table>
</div>