<p>giỏ hàng</p>
<?php
    if(isset($_SESSION['cart'])){
        echo '<pre>';
        print_r($_SESSION['cart']);
        echo '</pre>';
    }
?>