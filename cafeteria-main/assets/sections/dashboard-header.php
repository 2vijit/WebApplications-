<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link rel="icon" type="image/x-icon" href="./assets/images/fav.png">
</head>

<body>
    <div class="dashboard-container">
        <div class="dashboard-main">
            <div class="sidebar-wrapper">
                <div class="sidebar">
                    <div class="sidebar-head">
                        <img src="./assets/images/logo.png" alt="" class="logo">
                    </div>
                    <div class="sidebar-content">
                        <div class="menu-wrapper">
                            <ul class="vertical-menu">
                                <li class="menu-link"><a href="./dashboard.php">Orders</a></li>
                                <li class="menu-link"><a href="./complete-order.php">Completed Orders</a></li>
                                <li class="menu-link"><a href="./menu.php">Menu</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-content">
                <div class="dashboard-contant-wrapper">
                    <div class="dashboard-header">
                            <h3>Welcome Back <?= $_SESSION["stuff_name"] ?></h3>
                            <button class="btn"><a href="login.html">Logout</a></button>
                    </div>
                    <div class="dashboard-inner">