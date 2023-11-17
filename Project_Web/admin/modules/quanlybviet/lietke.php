<?php
$sql_lietke_bv = "SELECT * FROM tbl_baiviet, tbl_danhmucbv WHERE tbl_baiviet.id_danhmuc = tbl_danhmucbv.id_danhmuc ORDER BY id_baiviet DESC";
$query_lietke_bv = mysqli_query($mysqli, $sql_lietke_bv);
if (!$query_lietke_bv) {
    die("Lỗi truy vấn: " . mysqli_error($mysqli));
}
?>
<h3 class="font-size-24 mg-5">Danh sách vừa nhập</h3>
<div class="bg-main-item pd-5 bd-5">

    <table border="1px" style="width: 100%;">
        <tr>
            <th>ID</th>
            <th>Tiêu đề</th>
            <th>Nội dung</th>
            <th>Ảnh</th>
            <th>Danh mục</th>
            <th>Quản lý</th>
        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietke_bv)) {
            $i++;
            ?>
            <tr>
                <td>
                    <?php echo $i ?>
                </td>
                <td>
                    <?php echo $row["tieudebaiviet"] ?>
                </td>
                <td>
                    <?php echo $row["noidungbaiviet"] ?>
                </td>
                <td><img style="width: 200px;" src="modules/quanlybviet/uploads/<?php echo $row['hinhanh'] ?>" alt=""></td>
                <td>
                    <?php echo $row["id_danhmuc"] ?>
                </td>
                <td><a href="modules/quanlybviet/xuly.php?idbaiviet=<?php echo $row['id_baiviet'] ?>">Xóa</a>
                    |<a href="?action=quanlybviet&query=sua&idbaiviet=<?php echo $row['id_baiviet'] ?>">Sửa</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>