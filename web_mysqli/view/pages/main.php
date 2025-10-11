<div class="main">
    <?php
    include("sidebar/sidebar.php");
    ?>

    <div class="maincontent">
        <?php
        if (isset($_GET['quanly'])) {
            $tam = $_GET['quanly'];
        } else {
            $tam = "";
        }
        if ($tam == 'monan') {
            include("main/tenmonan.php");
        } else if ($tam == 'danhmucsanpham') {
            include("main/danhmuc.php");
        } else if ($tam == 'timkiem') {
            include("main/timkiem.php");
        } else if ($tam == 'sanpham') {
            include("main/sanpham.php");
        } else if ($tam == 'baiviet') {
            include("main/baiviet.php");
        } else if ($tam == 'danhmucbaiviet') {
            include("main/danhmucbaiviet.php");
        } else if ($tam == 'lienhe') {
            include("main/lienhe.php");
        } else {
            include("main/index.php");
        }
        ?>
    </div>
</div>
<div class="clear"></div>