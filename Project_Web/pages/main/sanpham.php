<h3 style="margin-left:10px ;">Chi tiết sản phẩm</h3>
<?php
$sql_chitiet = "SELECT *FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc 
    AND tbl_sanpham.id_sp='$_GET[id]' LIMIT 1";
$query_chitiet = mysqli_query($mysqli, $sql_chitiet);
while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
?>
    <form method="POST" action="pages/main/themgio.php?idsanpham=<?php echo $row_chitiet['id_sp'] ?>">
        <div id="container">

            <div class="item">
                <img class="img-toaster" src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>" alt="toaster">

                <div class="info-item">
                    <div class="name-item">
                        <p><?php echo $row_chitiet['tensp'] ?></p>
                    </div>

                    <div class="cost-item">
                        <p>
                            <small><del><?php echo number_format($row_chitiet['giasp']) . 'vnđ' ?></del></small>
                            <strong style="padding-left: 5px;"> <?php echo number_format($row_chitiet['giasp']) ?></strong>
                            <strong class="red-text">( - 0 % )</strong>

                        </p>
                    </div>

                    <div class="delevery-item">
                        <div class="ship-item"><strong>Vận chuyển:</strong></div>
                        <div>
                            <div class="cost-ship">
                                <i class="ti-truck"></i>
                                <div>Hỗ trợ phí ship 50.000đ<br><small>đơn hàng từ 5.000.000đ</small></div>
                            </div>
                            <div class="location-ship">
                                <i class="ti-location-pin"></i>
                                <p>
                                    <a class="red-text" href="#">Chọn địa chỉ giao hàng</a> để dự báo thời gian giao
                                    hàng,
                                    phí đóng gói, vận
                                    chuyển chính xác nhất
                                </p>
                            </div>

                        </div>


                    </div>

                    <div class="color-item">
                        <div class="text">
                            <strong>Màu sắc: </strong>
                            <p>Trắng</p>
                        </div>
                        <img src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>" alt="">
                    </div>

                    <div class="choose-quantity-like">

                        <div class="like-item">
                            <strong>Yêu thích:</strong>
                            <i class="ti-heart red-heart"></i>
                        </div>
                    </div>


                    <div class="buy-item">
                        <button onclick="xacNhanMuaHang()" class="buy-now">
                            <i class="ti-shopping-cart"></i>
                            <div><strong>Mua ngay</strong></div>
                        </button>
                        <button name="themgiohang" onclick="xacNhanThemHang()" class="add-to-bag">
                            <i class="ti-shopping-cart"></i>
                            <div>Thêm vào giỏ hàng</div>
                        </button>
                    </div>

                </div>
            </div>

            <div class="general-information">
                <div class="ge-info">
                    <strong>THÔNG TIN CHUNG</strong>
                </div>
                <div class="table-info">
                    <table>
                        <tr>
                            <td><span>Mã sản phẩm:</span></td>
                            <td><span><?php echo $row_chitiet['masp'] ?></span></td>
                        </tr>
                        <tr>
                            <td><span>Số lượng:</span></td>
                            <td><span><?php echo $row_chitiet['soluong'] ?></span></td>
                        </tr>
                        <tr>
                            <td><span>Danh mục:</span></td>
                            <td><span><?php echo $row_chitiet['tendanhmuc'] ?></span></td>
                        </tr>
                    </table>

                </div>

            </div>
        </div>
    </form>
<?php
}
?>