<?php
include('../../admin/config/config.php');
// Bắt đầu hoặc khôi phục session
session_start();
//them sản phẩm
if (isset($_GET['cong'])) {
    $id = $_GET['cong'];
    $product = array(); // Khởi tạo mảng product trước khi sử dụng

    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = array(
                'tensp' => $cart_item['tensp'],
                'id' => $cart_item['id'],
                'soluong' => $cart_item['soluong'],
                'giasp' => $cart_item['giasp'],
                'hinhanh' => $cart_item['hinhanh'],
                'masp' => $cart_item['masp']
            );
        } else {
            $tangsoluong = $cart_item['soluong'] < 10 ? $cart_item['soluong'] + 1 : $cart_item['soluong'];
            $product[] = array(
                'tensp' => $cart_item['tensp'],
                'id' => $cart_item['id'],
                'soluong' => $tangsoluong,
                'giasp' => $cart_item['giasp'],
                'hinhanh' => $cart_item['hinhanh'],
                'masp' => $cart_item['masp']
            );
        }
    }

    $_SESSION['cart'] = $product; // Gán mảng product vào session sau khi xử lý vòng lặp

    header('Location:../../index.php?quanly=giohang');
}

//trừ sản phẩm
if (isset($_GET['tru'])) {
    $id = $_GET['tru'];
    $product = array(); // Khởi tạo mảng product trước khi sử dụng

    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = array(
                'tensp' => $cart_item['tensp'],
                'id' => $cart_item['id'],
                'soluong' => $cart_item['soluong'],
                'giasp' => $cart_item['giasp'],
                'hinhanh' => $cart_item['hinhanh'],
                'masp' => $cart_item['masp']
            );
        } else {
            $trusoluong = $cart_item['soluong'] > 1 ? $cart_item['soluong'] - 1 : $cart_item['soluong'];
            $product[] = array(
                'tensp' => $cart_item['tensp'],
                'id' => $cart_item['id'],
                'soluong' => $trusoluong,
                'giasp' => $cart_item['giasp'],
                'hinhanh' => $cart_item['hinhanh'],
                'masp' => $cart_item['masp']
            );
        }
    }

    $_SESSION['cart'] = $product; // Gán mảng product vào session sau khi xử lý vòng lặp

    header('Location:../../index.php?quanly=giohang');
}

//xóa sản phẩm
if (isset($_SESSION['cart']) && isset($_GET['xoa'])) {
    $id = $_GET['xoa'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = array(
                'tensp' => $cart_item['tensp'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'],
                'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']
            );
        }
        $_SESSION['cart'] = $product;
        header('Location:../../index.php?quanly=giohang');
    }
}

//xóa tất cả
if (isset($_GET['xoatatca']) && $_GET['xoatatca'] == 1) {
    unset($_SESSION['cart']);
    header('Location:../../index.php?quanly=giohang');
}

// Thêm sản phẩm vào giỏ hàng
if (isset($_POST['themgiohang'])) {
    $id = $_GET['idsanpham'];
    $soluong = 1;

    $sql = "SELECT * FROM tbl_sanpham WHERE id_sp = '" . $id . "' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($query);

    if ($row) {
        $new_product = array(
            'tensp' => $row['tensp'],
            'id' => $id,
            'soluong' => $soluong,
            'giasp' => $row['giasp'],
            'hinhanh' => $row['hinhanh'],
            'masp' => $row['masp']
        );

        // Kiểm tra session giỏ hàng tồn tại
        if (isset($_SESSION['cart'])) {
            $found = false;
            foreach ($_SESSION['cart'] as &$cart_item) {
                // Nếu dữ liệu trùng
                if ($cart_item['id'] == $id) {
                    $cart_item['soluong'] += $soluong;
                    $found = true;
                }
            }

            if (!$found) {
                $_SESSION['cart'][] = $new_product;
            }
        } else {
            // Nếu session giỏ hàng không tồn tại
            $_SESSION['cart'][] = $new_product;
        }
    }
    echo '<script>window.history.back();</script>';

}
// mua hang
if (isset($_POST['muahang'])) {
    $id = $_GET['idsanpham'];
    $soluong = 1;

    $sql = "SELECT * FROM tbl_sanpham WHERE id_sp = '" . $id . "' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($query);

    if ($row) {
        $new_product = array(
            'tensp' => $row['tensp'],
            'id' => $id,
            'soluong' => $soluong,
            'giasp' => $row['giasp'],
            'hinhanh' => $row['hinhanh'],
            'masp' => $row['masp']
        );

        // Kiểm tra session giỏ hàng tồn tại
        if (isset($_SESSION['cart'])) {
            $found = false;
            foreach ($_SESSION['cart'] as &$cart_item) {
                // Nếu dữ liệu trùng
                if ($cart_item['id'] == $id) {
                    $cart_item['soluong'] += $soluong;
                    $found = true;
                }
            }

            if (!$found) {
                $_SESSION['cart'][] = $new_product;
            }
        } else {
            // Nếu session giỏ hàng không tồn tại
            $_SESSION['cart'][] = $new_product;
        }
    }

    header('Location:../../index.php?quanly=giohang');
}