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
    } else {
        include("modules/dashboard.php");
    }
    ?>
</div>