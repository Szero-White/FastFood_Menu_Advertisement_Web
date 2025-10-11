<?php
if (isset($_GET['trang']) && $_GET['trang'] != "") {
    $page = $_GET['trang'];
} else {
    $page = 1;
}

$begin = ($page - 1) * 8;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        a {
            color: aliceblue;
            text-decoration: none;
        }

        .pagination {
            text-align: center;
            padding-left: 31rem;
        }

        .page-item {
            display: inline-block;

        }

        ul.list_trang {
            padding: 0;
            margin: 0;
            list-style: none;
            padding-left: 390px;
        }

        ul.list_trang li {
            float: left;
            padding: 5px 13px;
            margin: 5px;
            background: black;
            display: block;
            border-radius: 12px;

        }

        ul.list_trang li:hover {
            background: peru;
            text-align: center;
            text-decoration: none;
        }


        ul.list_trang li.current {
            background: peru;
        }
    </style>
</head>

<body>
    <?php
    $sql_pro = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,8";
    $query_pro = mysqli_query($mysqli, $sql_pro);
    ?>

    <h1 style="color: peru;" class="dsp">Menu</h1>
    <ul class="product_list">
        <?php
        while ($row = mysqli_fetch_array($query_pro)) {
        ?>
            <li>
                <a href="">
                    <img src="../admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
                    <p style="font-weight: bold;" class="title_product"><?php echo $row['tensanpham'] ?></p>
                    <p class="gia">Giá : <?php echo number_format($row['giasp'], 0, ',', '.') . 'đ' ?></p>
                    <p style="text-align : center ; color : bisque"><?php echo $row['tendanhmuc'] ?></p>
                    <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                        <button type="button" class="btn btn-light">Xem chi tiết</button>
                    </a>
                </a>
            </li>
        <?php
        }
        ?>
    </ul>
    <div style="clear: both;"></div>
    <?php
    $count_query = mysqli_query($mysqli, "SELECT COUNT(*) AS total FROM tbl_sanpham");
    $count_result = mysqli_fetch_assoc($count_query);
    $row_count = $count_result['total'];

    $total_pages = ceil($row_count / 8);

    if (isset($_GET['trang']) && $_GET['trang'] != "") {
        $page = $_GET['trang'];
    } else {
        $page = 1;
    }

    $range = 1;

    $begin = max(1, $page - $range);
    $end = min($total_pages, $page + $range);

    if ($page == $total_pages && $total_pages >= 3) {
        $begin = max(1, $total_pages - 2);
    }

    if ($page == 1) {
        $end = min($total_pages, $page + 2);
    }

    if ($page == $total_pages && $total_pages > 2) {
        $begin = max(1, $total_pages - 2);
        $end = $total_pages;
    }

    $pages = range(1, $total_pages);

    ?>
    <ul class="list_trang">
        <?php
        if ($page > 1) {
            $prev_page = $page - 1;
        ?>
            <li><a href="index.php?trang=<?php echo $prev_page; ?>">Trước</a></li>
        <?php
        } else {
        ?>
            <li style="color: white;"><span>Trước</span></li>
        <?php
        }

        for ($i = $begin; $i <= $end; $i++) {
            $current_class = ($i == $page) ? "current" : "";
        ?>
            <li class="<?php echo $current_class; ?>"><a href="index.php?trang=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php
        }
        if ($page < $total_pages) {
            $next_page = $page + 1;
        ?>
            <li><a href="index.php?trang=<?php echo $next_page; ?>">Sau</a></li>
        <?php
        } else {
        ?>
            <li style="color: white;"><span>Sau</span></li>
        <?php
        }
        ?>
    </ul>
</body>

</html>