<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ionicons@5.0.0/dist/css/ionicons.min.css">
    <style>
        .footer {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: black;
            border-top: 1px solid white;
            border-radius: 2px;
            margin-top: 11px;
        }

        .footer_logo {
            width: 30%;
            background-color: black;
        }

        .footer_logo img {
            width: 25%;
            height: auto;
            margin-left: 181px;
            border-radius: 20px;
        }

        .footer_menu {
            width: 40%;
            background-color: black;
        }

        .footer_menu ul {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
            background-color: black;
        }

        .footer_menu li {
            padding: 0 15px;

        }

        .footer_menu a {
            color: white;
            text-decoration: none;
            background-color: black;
        }

        .footer_contact {
            width: 30%;
            color: white;
            background-color: black;
            text-align: center;
        }

        .footer_contact a {
            color: white;
            text-decoration: none;
            font-size: 2.5em;
            padding-right: 10px;
            background-color: black;
        }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>

    <div class="footer">
        <div class="footer_logo">
            <img src="images/1200_50/logo.jpg" alt="">
        </div>

        <div style="color: white;" class="footer_menu">
            <ul>
                <li>Địa chỉ: Quận 7, Thành phố Hồ Chí Minh</li>
                <li>Email: congtoan2k4@example.com</li>
            </ul>
        </div>

        <div class="footer_contact">
            <h3>Liên hệ</h3>
            <a href="https://www.facebook.com/DominosPizzaVietnam"><ion-icon name="logo-facebook"></ion-icon></a>
            <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
            <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
            <a href="https://www.youtube.com/@dominos"><ion-icon name="logo-youtube"></ion-icon></a>
        </div>
    </div>
</body>

</html>