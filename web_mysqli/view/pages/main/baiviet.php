<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
            font-family: Arial, sans-serif;
        }

        .wrapper_chitiet {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .wrapper_chitiet h3 {
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .hinhanh_sanpham {
            text-align: center;
            margin-bottom: 20px;
        }

        .hinhanh_sanpham img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .chitiet_sanpham p {
            margin-bottom: 15px;
        }

        .chitiet_sanpham p span {
            font-weight: bold;
        }

    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php
   

    $sql_bv = "SELECT * FROM tbl_baiviet, tbl_danhmucbaiviet WHERE tbl_baiviet.id_danhmuc=tbl_danhmucbaiviet.id_baiviet AND tbl_baiviet.id_bv = '$_GET[id]' LIMIT 1";
    $query_bv = mysqli_query($mysqli, $sql_bv);

    while ($row_bv = mysqli_fetch_array($query_bv)) {
    ?>
        <div class="wrapper_chitiet">
            <h3 style="color: maroon;"><?php echo $row_bv['tenbaiviet'] ?></h3>
            <div class="hinhanh_sanpham">
                <img src="../admincp/modules/quanlybaiviet/uploads_bv/<?php echo $row_bv['hinhanh'] ?>" alt="Hình ảnh sản phẩm">
            </div>
            <div class="chitiet_sanpham">
                <p><span>Danh mục bài viết:</span> <?php echo $row_bv['tendanhmucbv'] ?></p>
                <p><span>Tóm tắt bài viết:</span> <?php echo $row_bv['tomtat'] ?></p>
                <p><span>Nội dung bài viết:</span> <?php echo $row_bv['noidung'] ?></p>
            </div>
        </div>
    <?php
    }

    $mysqli->close();
    ?>
</body>

</html>
