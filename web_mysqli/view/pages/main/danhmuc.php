<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        ul.product_list1 {
            padding: 0;
            margin: 0;
            list-style: none;
            float: left;
            border-radius: 49p;
            width: 100%;
            padding-top: 20px;
        }

        ul.product_list1 li {
            width: 20%;
            border: 2px solid white;
            border-radius: 3%;
            float: left;
            text-align: center;
            color: peru;
            margin-right: 55px;
            margin-bottom: 53px;
            height: 22rem;
            background-color: black;
        }
        

        ul.product_list1 li img {
            border-radius: 9%;
            margin-top: 11px;
            width: 91%;
            height: 12rem;
            padding-bottom: 10px;
        }

        h1.meme {
            color: peru;
            padding-top: 7px;
        }
        

        a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php
    $sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc = '$_GET[id]' ORDER BY id_sanpham DESC";
    $query_pro = mysqli_query($mysqli, $sql_pro);

    $sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc = '$_GET[id]' limit 1";
    $query_cate = mysqli_query($mysqli, $sql_cate);
    $row_title = mysqli_fetch_array($query_cate);
    ?>

    <h1 class="meme">Menu : <?php echo $row_title['tendanhmuc'] ?></h1>
    <ul class="product_list1">
        <?php
        while ($row_pro = mysqli_fetch_array($query_pro)) {
        ?>
            <li>
                <a href="">
                    <img src="../admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>">
                    <p style="font-weight: bold;" class="title_product"><?php echo $row_pro['tensanpham'] ?></p>
                    <p class="gia">Giá : <?php echo number_format($row_pro['giasp'],0,',','.'). 'đ' ?></p>
                    <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
                        <button type="button" class="btn btn-light">Xem chi tiết</button>
                    </a>
                </a>
            </li>
        <?php
        }
        ?>
    </ul>
</body>

</html>