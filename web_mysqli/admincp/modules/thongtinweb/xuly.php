<?php
include('../../config/config.php');

if (isset($_POST['themlienhe'])) {
    // Lấy dữ liệu từ form
    $thongtinlienhe = mysqli_real_escape_string($mysqli, $_POST['thongtinlienhe']);
    $id_lienhe = mysqli_real_escape_string($mysqli, $_GET['id_lienhe']);

    // Kiểm tra xem liệu người dùng đã tải lên hình ảnh mới hay không
    if(isset($_FILES['hinhanh']) && $_FILES['hinhanh']['error'] === UPLOAD_ERR_OK) {
        $hinhanh = $_FILES['hinhanh']['name'];
        $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
        $target_dir = "uploads_ha/";
        $target_file = $target_dir . basename($hinhanh);

        // Di chuyển tệp tải lên vào thư mục đích
        if (move_uploaded_file($hinhanh_tmp, $target_file)) {
            // Cập nhật thông tin liên hệ và hình ảnh
            $sql_update = "UPDATE tbl_lienhe SET thongtinlienhe = '$thongtinlienhe', hinhanh = '$hinhanh' WHERE id_lienhe = '$id_lienhe'";
            if (mysqli_query($mysqli, $sql_update)) {
                header('Location:../../index.php?action=quanlyweb&query=capnhat');
            } else {
                echo "Lỗi: " . mysqli_error($mysqli);
            }
        } else {
            echo "Lỗi khi tải lên tệp.";
        }
    } else {
        // Chỉ cập nhật thông tin liên hệ
        $sql_update = "UPDATE tbl_lienhe SET thongtinlienhe = '$thongtinlienhe' WHERE id_lienhe = '$id_lienhe'";
        if (mysqli_query($mysqli, $sql_update)) {
            header('Location:../../index.php?action=quanlyweb&query=capnhat');
        } else {
            echo "Lỗi: " . mysqli_error($mysqli);
        }
    }
}
?>
