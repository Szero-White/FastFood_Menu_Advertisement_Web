<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .container {
            display: flex;
            align-items: center;
        }

        .logo {
            margin-right: auto;
        }

        .logo img {
            width: 116px;
            height: 65px;
            margin: 6px 19px 2px;
            border: 1px solid;
            border-radius: 9%;
        }

        .list_header {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 20px;
        }

        .list_header li:last-child {
            margin-right: 0;
        }

        .search-form {
            margin-left: 20px;
            border-radius: 21px;
            background-color: black;
            color: black;
            border: 1px solid black;
        }

        .input_search {
            padding: 5px;
            border-radius: 21px;
        }

        .submit_search {
            padding: 5px 10px;
            background-color: white;
            color: black;
            border-radius: 21px;
        }

        ul.list_header li:hover{
            background-color: peru;
        }
        ul.list_header li.current {
            background-color: peru;
        }
        
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <?php
    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
    $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
    ?>
    <div class="container">
        <div class="logo">
            <img src="images/1200_50/logo.jpg" alt="">
        </div>
        <ul class="list_header">
            <li><a href="index.php">Trang Chủ</a></li>
            <li><a href="index.php?quanly=lienhe">Giới Thiệu</a></li>
            <?php
            while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
            ?>
                <li>
                    <a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a>
                </li>
            <?php
            }
            ?>
            
            <form action="index.php?quanly=timkiem" method="POST" class="search-form">
                <input class="input_search" type="text" name="tukhoa" required>
                <button class="submit_search" type="submit" name="timkiem">
                    <ion-icon class="icon" name="search-outline"></ion-icon>
                </button>
            </form>
        </ul>
    </div>

</body>

</html>

