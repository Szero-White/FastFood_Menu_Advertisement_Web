<?php
session_start();
if (!isset($_SESSION['dangnhap'])) {
    header('Location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admincp</title>
    <link rel="stylesheet" type="text/css" href="css_admin/c_admi.css">
    <style>
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .title_admin {
            color: red;
            text-align: center;
            font-size: 30px;
            margin: 0;
            padding-left: 38rem;
        }

        .logout-link a {
            padding: 10px;
            border: 1px solid black;
            text-decoration: none;
            color: black;
            margin-right: 35px;
        }
    </style>
</head>

<body>
    <div class="header-container">
        <h3 class="title_admin">Welcome to AdminCP</h3>
        <div class="logout-link">
            <a href="index.php?dangxuat=1">Đăng xuất</a>
        </div>
    </div>
    <?php
    if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
        unset($_SESSION['dangnhap']);
        header('Location:login.php');
    }
    ?>
    <!-- <p style="margin-left: 16rem;"><a href="index.php?dangxuat=1">Đăng xuất</a></p> -->
    <div class="wrapper">
        <?php

        include("config/config.php");
        include("modules/header.php");
        include("modules/menu.php");
        include("modules/main.php");
        include("modules/footer.php");
        ?>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.24.0-lts/standard/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('tomtat');
        CKEDITOR.replace('noidung');
    </script>

</body>

</html>