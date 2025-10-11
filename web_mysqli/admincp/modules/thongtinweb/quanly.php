<p>NHẬP THÔNG TIN GIỚI THIỆU</p>
<?php
$sql_lh = "SELECT * FROM tbl_lienhe WHERE id_lienhe = 1";
$query_lh = mysqli_query($mysqli, $sql_lh);
?>
<table border="1" style="width:100%; border-collapse: collapse;">
    <?php
    while ($dong = mysqli_fetch_array($query_lh)) {
    ?>
        <form method="POST" action="modules/thongtinweb/xuly.php?id_lienhe=<?php echo $dong['id_lienhe'] ?>" enctype="multipart/form-data">
            <tr>
                <td>Nhập thông tin</td>
                <td><textarea rows="20" name="thongtinlienhe" style="resize: none;width: 99.7%;"><?php echo $dong['thongtinlienhe'] ?></textarea></td>
            </tr>
            <tr>
                <td>Hình ảnh</td>
                <td>
                    <input type="file" name="hinhanh">
                    <img src="modules/thongtinweb/uploads_ha/<?php echo $dong['hinhanh'] ?>" width="150px">
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="themlienhe" value="Cập nhật"></td>
            </tr>
        </form>
    <?php
    }
    ?>
</table>
