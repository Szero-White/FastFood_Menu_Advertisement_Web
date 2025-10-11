<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Phần giao diện của danh sách sản phẩm */
        .list_movie {
            margin-top: 20px;
            /* Khoảng cách từ đầu trang */
        }

        /* Khối chứa danh sách sản phẩm */
        .movie_box {
            padding: 0;
            margin: 0;
            list-style: none;
            float: left;
            border-radius: 49p;
            width: 100%;
            padding-top: 20px;
        }

        /* Mỗi sản phẩm */
        .movie_box li {
            width: 20%;
            border: 1px solid white;
            border-radius: 3%;
            float: left;
            text-align: center;
            color: peru;
            margin-right: 55px;
            margin-bottom: 53px;
            height: 24rem;
            background-color: black;
        }

        /* Hình ảnh sản phẩm */
        .movie_img img {
            border-radius: 9%;
            margin-top: 11px;
            width: 91%;
            height: 12rem;
            margin-bottom: 5px;
        }
        h2{
            color: white;
            padding-top: 7px;
        }

        a {
            color: white;
            text-decoration: none;
        }
        
    </style>
</head>

<body>
    <?php
    if (isset($_POST["timkiem"])) {
        $tukhoa = $_POST["tukhoa"];
    }
    $sql_pro = "SELECT DISTINCT tbl_sanpham.id_sanpham, tbl_sanpham.tensanpham, tbl_sanpham.giasp, tbl_danhmuc.tendanhmuc, tbl_sanpham.hinhanh FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.tensanpham LIKE '%" . $tukhoa . "%' AND tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc";
    $query_pro = mysqli_query($mysqli, $sql_pro);


    ?>
    <div class="list_movie">
        <h2>
            Kết quả tìm kiếm:
            <?php echo $_POST["tukhoa"] ?>
        </h2>
        <ul class="movie_box">
            <?php
            while ($row = mysqli_fetch_array($query_pro)) {
            ?>
                <li>
                    <a href="">
                        <div class="movie_img">
                            <img src="../admincp/modules/quanlysp/uploads/<?php echo $row["hinhanh"] ?>">
                        </div>

                        <div class="movie_describe">

                            <p style="font-weight: bold;" class="ten"><?php echo $row["tensanpham"] ?></p>
                            <p class="gia">Giá : <?php echo number_format($row['giasp'],0,',','.'). 'đ' ?></p>
                            <p style="text-align : center ; color : bisque"><?php echo $row['tendanhmuc'] ?></p>
                            <a href="index.php?quanly=sanpham&id=<?php echo $row["id_sanpham"] ?>">
                        <button type="button" class="btn btn-light">Xem chi tiết</button>
                    </a>
                        </div>
                    </a>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
</body>

</html>