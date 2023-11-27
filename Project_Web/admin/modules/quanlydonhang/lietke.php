<p>Liệt kê</p>
<?php
$sql_lietke_dh = "SELECT *FROM tbl_giohang,tbl_user WHERE tbl_giohang.id_user=tbl_user.id_user 
ORDER BY tbl_giohang.id_gio DESC";
$query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
?>
<h3 class="font-size-24 mg-5">Danh sách vừa nhập</h3>
<div class="bg-main-item pd-5 bd-5">
    <table border="1px" style="width: 100%;" class="danhmuc-lietke">
        <tr>
            <th>ID</th>
            <th>Mã đơn hàng</th>
            <th>Tên khách hàng</th>
            <th>Email</th>

            <th>Quản lý</th>
        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietke_dh)) {
            $i++;
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row["code_gio"] ?></td>
                <td><?php echo $row["name_user"] ?></td>
                <td><?php echo $row["email"] ?></td>
                
                <td>
                    <a href="index.php?action=donhang&query=xulydonhang&code=<?php echo $row['code_gio'] ?>">Xem đơn hàng</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>