<?php
$sql_lietke_bv = "SELECT * FROM tbl_baiviet,tbl_danhmucbaiviet WHERE tbl_baiviet.id_danhmuc=tbl_danhmucbaiviet.id_baiviet ORDER BY id_baiviet DESC";
$query_lietke_bv = mysqli_query($mysqli, $sql_lietke_bv);
?>
<p>DANH SÁCH BÀI VIẾT</p>
<table style='width:100%' border="1" style="border-collapse: collapse;">
    <tr>
        <th>Id</th>
        <th>Tên sản phẩm</th>
        <th>Tóm tắt</th>
        <th>Nội dung</th>
        <th>Danh mục</th>
        <th>Hình ảnh</th>
        <th>Quản lý</th>
    </tr>

    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_bv)) {
        $i++;
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['tenbaiviet'] ?></td>
            <td><?php echo $row['tomtat'] ?></td>
            <td><?php echo $row['noidung'] ?></td>
            <td><?php echo $row['tendanhmucbv'] ?></td>
            <td><img src="modules/quanlybaiviet/uploads_bv/<?php echo $row['hinhanh'] ?>" width="150px"></td>
            <td>
                <a href="modules/quanlybaiviet/xuly.php?idbaiviet= <?php
                                                                    echo $row['id_bv'] ?>">Xóa</a> |
                <a href="?action=quanlybaiviet&query=sua&idbaiviet=<?php
                                                                    echo $row['id_bv'] ?>">Sửa</a>
            </td>

        </tr>

    <?php
    }
    ?>
</table>