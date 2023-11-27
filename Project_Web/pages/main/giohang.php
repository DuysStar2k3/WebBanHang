 <style>
     body {
         font-family: Arial, sans-serif;
         margin: 0;
         padding: 0;
         background-color: #f4f4f4;
     }

     header {
         background-color: #333;
         color: #fff;
         text-align: center;
         padding: 1em;
     }

     .cart-container {
         max-width: 800px;
         margin: 20px auto;
         background-color: #fff;
         padding: 20px;
         border-radius: 8px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
     }

     .cart-item {
         display: flex;
         justify-content: space-between;
         align-items: center;
         border-bottom: 1px solid #eee;
         padding: 10px 0;
     }

     .cart-item img {
         max-width: 100px;
         max-height: 100px;
         margin-right: 10px;
     }

     .cart-item-details {
         flex: 1;
     }

     .cart-total {
         margin-top: 20px;
         font-size: 1.2em;
         text-align: right;
     }

     .checkout-button {
         display: block;
         width: 100%;
         padding: 10px;
         background-color: #333;
         color: #fff;
         text-align: center;
         text-decoration: none;
         border: none;
         border-radius: 4px;
         cursor: pointer;
         margin-top: 5px;
     }

     a.item_gio {
         text-decoration: none;
         color: white;
         margin-left: 87%;
         border: 1px solid black;
         padding: 2px;
         background-color: #333;
     }
 </style>

 <body>
     <div class="cart-container">
         <?php
            $total = 0;
            if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $index => $product) {
                    $subtotal = $product['soluong'] * $product['giasp'];
                    $total += $subtotal;
            ?>
                 <div class="cart-item">
                     <img src="admin/modules/quanlysp/uploads/<?php echo $product['hinhanh'] ?>" alt="Lỗi hình ảnh">
                     <div class="cart-item-details">
                         <h2>Tên sản phẩm: <?php echo $product['tensp'] ?></h2>
                         <p>Giá sản phẩm: <?php echo number_format($product['giasp']) . 'vnđ' ?></p>
                         <p>Số lượng: <a href="pages/main/themgio.php?tru=<?php echo $product['id'] ?>">
                                 <i class="fa fa-minus" aria-hidden="true" style="color: #333;"></i></a> <?php echo $product['soluong'] ?>
                             <a href="pages/main/themgio.php?cong=<?php echo $product['id'] ?>"><i class="fa fa-plus" aria-hidden="true" style="color: #333;"></i></a>
                         </p>
                         <p>Tổng: <?php echo number_format($subtotal) . 'vnđ' ?></p>
                         <a class="item_gio" href="pages/main/themgio.php?xoa=<?php echo $product['id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                     </div>
                 </div>
         <?php
                }
            } else {
                echo '<p>Giỏ hàng trống</p>';
            }
            ?>

         <div class="cart-total">
             <p>Tổng cộng: <?php echo number_format($total) . 'vnđ' ?></p>
             <a class="item_gio" href="pages/main/themgio.php?xoatatca=1">Xóa tất cả</a>
         </div>

         <div>
         <?php
            if (isset($_SESSION['login'])) {

            ?>
            <a style="text-decoration: none;" href="index.php?quanly=thanhtoan"><button class="checkout-button" type="submit" name="submit_order">Đặt hàng</button></a>
         <?php
            } else {  
            ?>
            <a style="text-decoration: none;" href="index.php?quanly=login#"><button class="checkout-button" type="submit" >Đăng kí tài khoản để đặt hàng</button></a>
         <?php
            }
            ?>

         </div>
     </div>
 </body>