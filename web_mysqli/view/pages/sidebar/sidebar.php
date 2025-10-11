<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        ul.list-group {
            width: 24%;
            height: auto;
            float: left;
            padding-top: 10px;

        }

        li.list-group-item {
            background-color: black;
            border: 1px solid black;
        }


        li.list-group-item:hover {
            background-color: white;
        }
        li.list-group-item.current {
            background-color: white;
        }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



    <ul style="background-color: black; " class="list-group">
        <li class="list-group-item">
            <h1 style="color: peru;">Menu</h1>
        </li>
        <?php
        $sql_danhmuc = "SELECT * FROM tbl_sanpham INNER JOIN tbl_danhmuc ON tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc GROUP BY tbl_danhmuc.id_danhmuc ORDER BY tbl_danhmuc.id_danhmuc ASC ";
        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
        while ($row = mysqli_fetch_array($query_danhmuc)) {
        ?>
            <li class="list-group-item">
                <a style="background-color: black;color: white;list-style: none;text-decoration: none;display: block;padding: 10px;" href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a>
            </li>
        <?php
        }
        ?>
        <li class="list-group-item">
            <h1 style="color: peru;">Mục thông báo</h1>
        </li>

        <?php
        $sql_danhmuc_bv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
        $query_danhmuc_bv = mysqli_query($mysqli, $sql_danhmuc_bv);
        while ($row1 = mysqli_fetch_array($query_danhmuc_bv)) {
        ?>
            <li class="list-group-item">
                <a style="background-color: black;color: white;list-style: none;text-decoration: none;display: block;padding: 10px;" href="index.php?quanly=danhmucbaiviet&id=<?php echo $row1['id_baiviet'] ?>"><?php echo $row1['tendanhmucbv'] ?></a>
            </li>
        <?php
        }
        ?>
    </ul>

    
</body>


</html>