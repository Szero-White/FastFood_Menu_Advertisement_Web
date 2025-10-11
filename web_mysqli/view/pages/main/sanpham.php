<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .wrapper_chitiet {
            display: flex;
            align-items: center;
            color: white;
            padding-top: 67px;
        }

        .hinhanh_sanpham {
            width: 30%; 
            margin-right: 20px; 
        }

        .hinhanh_sanpham img {
            width: 100%; 
            height: auto;
            margin-left: 134px;
        }

        .chitiet_sanpham {
            width: 70%; 
            padding-left: 111px;
        }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php
    $sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham = '$_GET[id]' LIMIT 1";
    $query_chitiet = mysqli_query($mysqli, $sql_chitiet);
    while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {

    ?>
        <div class="wrapper_chitiet">
            <div class="hinhanh_sanpham">
                <img src="../admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>" alt="Hình ảnh sản phẩm">
            </div>
            <div class="chitiet_sanpham">
                <h3>Tên sản phẩm : <?php echo $row_chitiet['tensanpham'] ?></h3>
                <p>Mã sản phẩm : <?php echo $row_chitiet['masp'] ?></p>
                <p>Giá sản phẩm : <?php echo $row_chitiet['giasp'] ?></p>
                <p>Số lượng sản phẩm : <?php echo $row_chitiet['soluong'] ?></p>
                <p>Danh mục sản phẩm : <?php echo $row_chitiet['tendanhmuc'] ?></p>
                <!-- <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                        <button type="button" class="btn btn-light">Xem chi tiết</button>
                    </a> -->
            </div>
        </div>
    <?php
    }
    ?>

</body>

</html>
