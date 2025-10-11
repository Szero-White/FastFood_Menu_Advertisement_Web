<?php
session_start();
include('config/config.php');
if (isset($_POST['dangnhap'])) {
    $taikhoan = $_POST['username'];
    $matkhau = md5($_POST['password']);
    $sql = "SELECT * FROM tbl_admin WHERE username = '" .$taikhoan. "' AND password = '" . $matkhau . "' limit 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $_SESSION['dangnhap'] = $taikhoan;
        header("Location:index.php");
    } else {
        echo '<script>alert("Tài khoản hoặc mật khẩu không đúng, vui lòng nhập lại.")</script>';
        header("Location:login.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: cornsilk;
        }

        .login-register-container {
            width: 50rem; 
            padding: 20px;
            border: 1px solid peru;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
            background-color: white;
        }

        .login-register-container h3 {
            text-align: center;
        }

        .login-register-form {
            margin-bottom: 20px;
        }

        .image-container {
            text-align: center;
        }
        .login-register-container {
        width: 40rem; 
        padding: 20px;
        border: 1px solid;
        border-radius: 20px;
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
        background-color: white;
    }

    .image-container img {
        
        width: 50%; 
        margin-bottom: 20px;
    }

    </style>
</head>
<body>
    <div class="login-register-container">
        <div class="image-container">
            <img src="../view/images/anh_hep/2-2.png" alt="Avatar" width="150">
        </div>
        <div class="login-register-form">
            <form action="" method="POST" >
                <h3 >Đăng Nhập Admin</h3>
                <form>
                    <div class="mb-3">
                        <label for="loginUsername" >Tên đăng nhập:</label>
                        <input type="text" name="username" class="form-control" id="loginUsername">
                    </div>
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label">Mật khẩu:</label>
                        <input type="password" name="password" class="form-control" id="loginPassword">
                    </div>
                    <button style="background-color: peru; margin-bottom: 17px;color: white;border-radius: 20px;width: 100%;height: 40px;margin-top: 14px;" name="dangnhap">Đăng Nhập</button>
                </form>
                <p style="text-align: center;">Bạn quên mật khẩu admin? <a href="#" style="color: black;" >Quên mật khẩu</a></p>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>
</html>




