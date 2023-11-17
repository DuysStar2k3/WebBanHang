<?php
include('../../admin/config/config.php');
//them sanpham vao gio hang
if (isset($_POST['themgiohang'])) {
    $id = $_GET['idsanpham'];
    $soluong = 1;
    $sql = "SELECT * FROM tbl_sanpham WHERE id_sp = '" . $id . "' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($query);
    if ($row) {
        $new_product = array(array(
            'tensp' => $row['tensp'], 'id' => $id, 'soluong' => $soluong, 'giasp' => $row['giasp'],
            'hinhanh' => $row['hinhanh'], 'masp' => $row['masp']
        ));

        //kiem tra session gio hang ton tai
        if (isset($_SESSION['cart'])) {
            $found = false;
            foreach ($_SESSION['cart'] as $cart_item) {
                //neu du lieu trung
                if ($cart_item['id'] == $id) {
                    $product[] = array('tensp' => $cart_item['tensp'], 'id' => $cart_item['id'], 'soluong' => $soluong ++,
                     'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
                    $found = true;
                } else {
                    //neu du lieu khong trung
                    $product[] = array('tensp' => $cart_item['tensp'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'],
                     'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
                }
            }
            if($found==false){
                $_SESSION['cart']=array_merge($product,$new_product);
            }else{
                $_SESSION['cart']= $product;
            }
        }else{
            $_SESSION['cart']=$new_product;
        }
       
    }
    header('Location:../../index.php?quanly=giohang');
    
}
