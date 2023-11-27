<div class="clear"></div>
<div class="main-container">
    <?php
    if (isset($_GET['action']) && $_GET['query']) {
        $tmp = $_GET['action'];
        $query = $_GET['query'];
    } else {
        $tmp = '';
        $query = '';
    }
    if ($tmp == 'danhmucsp' && $query == 'them') {
        include("modules/danhmucsp/them.php");
        include("modules/danhmucsp/lietke.php");
    } elseif ($tmp == 'danhmucsp' && $query == 'sua') {
        include("modules/danhmucsp/sua.php");
    } elseif ($tmp == 'quanlysp' && $query == 'them') {
        include("modules/quanlysp/them.php");
        include("modules/quanlysp/lietke.php");
    } elseif ($tmp == 'quanlysp' && $query == 'sua') {
        include("modules/quanlysp/sua.php");
        //quanlybv
    } elseif ($tmp == 'quanlybviet' && $query == 'them') {
        include("modules/quanlybviet/them.php");
        include("modules/quanlybviet/lietke.php");
    } elseif ($tmp == 'quanlybviet' && $query == 'sua') {
        include("modules/quanlybviet/sua.php");
    }
    //quanlydmbviet
    elseif ($tmp == 'quanlydmbviet' && $query == 'them') {
        include("modules/quanlydmbviet/them.php");
        include("modules/quanlydmbviet/lietke.php");
    } elseif ($tmp == 'quanlydmbviet' && $query == 'sua') {
        include("modules/quanlydmbviet/sua.php");
    }
    //quanlydonhang
    elseif ($tmp == 'quanlydonhang' && $query == 'lietke') {
        include("modules/quanlydonhang/lietke.php");
    }
    //quanlydonhang
    elseif ($tmp == 'donhang' && $query == 'xulydonhang') {
        include("modules/quanlydonhang/chitietdonhang.php");

    } elseif ($tmp == 'quanlybanner' && $query == 'them') {
        include("modules/banner/them.php");
        include("modules/banner/lietke.php");
    } else {
        include("modules/dashboard.php");
    }
    ?>
</div>