<?php
$sql_lietke_sp = "SELECT *FROM tbl_sanpham,tbl_danhmuc where tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sp DESC";
$query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>
<h3 class="font-size-24 mg-5">Danh sách vừa nhập</h3>
<div class="bg-main-item pd-5 bd-5">

    <table border="1px" style="width: 100%;">
        <tr>
            <th>ID</th>
            <th> Tên Sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá sản phẩm</th>
            <th>Số lượng</th>
            <th>Danh mục</th>
            <th>Mã sản phẩm</th>
            <th>Tóm tắt</th>
            <th>Trạng thái</th>
            <th>Quản lý</th>
        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietke_sp)) {
            $i++;
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row["tensp"] ?></td>
                <td><img style="width: 200px;" src="modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" alt=""></td>
                <td><?php echo $row["giasp"] ?></td>
                <td><?php echo $row["soluong"] ?></td>
                <td><?php echo $row["tendanhmuc"] ?></td>
                <td><?php echo $row["masp"] ?></td>
                <td><?php echo $row["tomtat"] ?></td>
                <td>
                    <?php if ($row["tinhtrang"] == 1) {
                        echo 'Kích Hoạt';
                    } else {
                        echo 'Ẩn';
                    } ?>
                </td>
    
                <td>
                <td><a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sp'] ?>">Xóa</a> 
                |<a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sp'] ?>">Sửa</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>