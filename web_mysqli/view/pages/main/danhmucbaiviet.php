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
            position: relative;
            box-sizing: border-box;
            padding-bottom: 50px; /* Đảm bảo có không gian cho nút */
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

        .button-container {
            position: absolute;
            bottom: 10px; /* Khoảng cách từ đáy của khung */
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php
    $sql_bv = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id_danhmuc = '$_GET[id]' ORDER BY id_bv ASC";
    $query_bv = mysqli_query($mysqli, $sql_bv);

    $sql_cate = "SELECT * FROM tbl_danhmucbaiviet WHERE tbl_danhmucbaiviet.id_baiviet = '$_GET[id]' limit 1";
    $query_cate = mysqli_query($mysqli, $sql_cate);
    $row_title = mysqli_fetch_array($query_cate);
    ?>

    <h1 class="meme">Menu : <?php echo $row_title['tendanhmucbv'] ?></h1>
    <ul class="product_list1">
        <?php
        while ($row_bv = mysqli_fetch_array($query_bv)) {
        ?>
            <li>
                <a href="">
                    <img src="../admincp/modules/quanlybaiviet/uploads_bv/<?php echo $row_bv['hinhanh'] ?>" alt="<?php echo $row_bv['tenbaiviet'] ?>">
                    <p style="font-weight: bold;padding-top: 7px;" class="title_product"><?php echo $row_bv['tenbaiviet'] ?></p>
                </a>
                <div class="button-container">
                    <a href="index.php?quanly=baiviet&id=<?php echo $row_bv['id_bv'] ?>">
                        <button type="button" class="btn btn-light">Xem chi tiết</button>
                    </a>
                </div>
            </li>
        <?php
        }
        ?>
    </ul>
</body>

</html>
