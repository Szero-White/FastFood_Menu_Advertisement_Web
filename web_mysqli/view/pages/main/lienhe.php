<h1 style="color: yellow;">FAST FOOD</h1>
<?php
$sql_lh = "SELECT * FROM tbl_lienhe WHERE id_lienhe = 1";
$query_lh = mysqli_query($mysqli, $sql_lh);
?>
<table border="1" style="width:100%; border-collapse: collapse;">
    <?php
    while ($dong = mysqli_fetch_array($query_lh)) {
    ?>
        <div class="hinhanh_sanpham">
            <img style="width:50%;" src="../admincp/modules/thongtinweb/uploads_ha/<?php echo $dong['hinhanh'] ?>" alt="Hình ảnh sản phẩm">
        </div>
        <p style="color: #333; font-family: Arial, sans-serif; font-size: 16px; line-height: 1.6; padding: 25px; background-color: #f9f9f9; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <?php echo $dong['thongtinlienhe'] ?>
</p>

    <?php
    }
    ?>
</table>
