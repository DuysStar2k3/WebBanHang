<p>Chi tiết đơn hàng</p>
<?php
$sql_lietke_ctdm = "SELECT *FROM tbl_sanpham,tbl_sanpham_gio WHERE tbl_sanpham_gio.id_sp=tbl_sanpham.id_sp
and tbl_sanpham_gio.code_gio='$_GET[code]' 
ORDER BY tbl_sanpham_gio.id_sanpham_gio DESC";
$query_lietke_ctdm = mysqli_query($mysqli, $sql_lietke_ctdm);
?>
<h3 class="font-size-24 mg-5">Danh sách vừa nhập</h3>
<div class="bg-main-item pd-5 bd-5">
    <table border="1px" style="width: 100%;" class="danhmuc-lietke">
        <tr>
            <th>ID</th>
            <th>Mã đơn hàng</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
        </tr>
        <?php
        $i = 0;
        $tongtien =0;
        while ($row = mysqli_fetch_array($query_lietke_ctdm)) {
            $i++;
            $thanhtien = $row["soluong_sanpham"] * $row["giasp"];
            $tongtien += $thanhtien;
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row["code_gio"] ?></td>
                <td><?php echo $row["tensp"] ?></td>
                <td><?php echo $row["soluong_sanpham"] ?></td>
                <td><?php echo number_format($row["giasp"]) . 'vnđ' ?></td>
                <td><?php echo number_format($thanhtien) . 'vnđ' ?></td>
            </tr>
        <?php
        }
        ?>
        <tr>
            <td colspan="6">
                <p>Tổng tiền:<?php echo number_format($tongtien) . 'vnđ' ?></p>
            </td>
        </tr>
    </table>
</div>