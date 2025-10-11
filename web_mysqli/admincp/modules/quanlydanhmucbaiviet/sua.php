<?php
$sql_sua_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet WHERE id_baiviet = '$_GET[idbaiviet]' limit 1";
$query_sua_danhmucbv = mysqli_query($mysqli, $sql_sua_danhmucbv);
?>
<p>CẬP NHẬT DANH MỤC BÀI VIẾT</p>

<table border="1" style='width:100%' style="border-collapse: collapse">
    <form method="POST" action="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $_GET['idbaiviet'] ?>">
        <?php
        while ($dong = mysqli_fetch_array($query_sua_danhmucbv)) {
        ?>
            <tr>
                <td>Tên danh mục bài viết</td>
                <td><input type="text" value="<?php echo $dong['tendanhmucbv'] ?>" name="tendanhmucbaiviet"></td>
            </tr>
            <tr>
                <td>Thứ tự</td>
                <td><input type="text" value="<?php echo $dong['thutu'] ?>" name="thutu"></td>
            </tr>
            <tr>
                <td><input type="submit" name="suadanhmucbaiviet" value="Cập nhật danh mục bài viết"></td>
            </tr>
        <?php
        }
        ?>
    </form>
</table>