<div id="main">
    <?php
        include("pages/sidebar/sidebar.php")
    ?>
    <div class="main_content">
    <?php
        if(isset($_GET["quanly"])){
            $tmp =$_GET['quanly'];
        }else{
            $tmp=" ";
        }
        if($tmp=="danhmuc"){
            include("pages/main/danhmuc.php");
        }elseif($tmp=="giohang"){
            include("pages/main/giohang.php");
        }elseif($tmp=="tintuc"){
            include("pages/main/tintuc.php");
        }elseif($tmp=="lienhe"){
            include("pages/main/lienhe.php");
        }else{
            include("pages/main/index_menu.php");
        }
    ?>
    </div>
</div>