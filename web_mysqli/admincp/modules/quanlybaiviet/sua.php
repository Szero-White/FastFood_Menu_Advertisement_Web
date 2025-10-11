<?php
$sql_sua_bv = "SELECT * FROM tbl_baiviet WHERE id_bv = '$_GET[idbaiviet]' limit 1";
$query_sua_bv = mysqli_query($mysqli, $sql_sua_bv);
?>
<p>CHỈNH SỬA DANH SÁCH BÀI VIẾT</p>

<table border="1" style='width:100%' style="border-collapse: collapse;">
    <?php
    while ($row = mysqli_fetch_array($query_sua_bv)) {
    ?>
        <form method="POST" action="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id_bv'] ?>" enctype="multipart/form-data">
            <tr>
                <td>Tên sản phấm</td>
                <td><input type="text" value="<?php echo $row['tenbaiviet'] ?>" name="tenbaiviet"></td>
            </tr>
            <tr>
                <td>Tóm tắt</td>
                <td><textarea rows="10" name="tomtat" style="resize: none"><?php echo $row['tomtat'] ?></textarea></td>
            </tr>
            <tr>
                <td>Nội dung</td>
                <td><textarea rows="10" name="noidung" style="resize: none"><?php echo $row['noidung'] ?></textarea></td>
            </tr>
            <tr>
                <td>Hình ảnh</td>
                <td>
                    <input type="file" name="hinhanh">
                    <img src="modules/quanlybaiviet/uploads_bv/<?php echo $row['hinhanh'] ?>" width="150px">
                </td>
            </tr>
            <tr>
                <td>DANH MỤC SẢN PHẨM</td>
                <td>
                    <select name="danhmuc">
                        <?php
                        $sql_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
                        $query_danhmucbv = mysqli_query($mysqli, $sql_danhmucbv);
                        while ($row_danhmucbv = mysqli_fetch_array($query_danhmucbv)) {
                            if ($row_danhmucbv['id_baiviet'] == $row['id_danhmuc']) {
                        ?>
                                <option selected value="<?php echo $row_danhmucbv['id_baiviet'] ?>"><?php echo $row_danhmucbv['tendanhmucbv'] ?></option>
                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $row_danhmucbv['id_baiviet'] ?>"><?php echo $row_danhmucbv['tendanhmucbv'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="suabaiviet" value="Sửa bài viêt"></td>
            </tr>
        </form>
    <?php
    }
    ?>
</table>