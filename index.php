<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
 require 'includes/common.php';
 if (isset($_SESSION['email']))
 {
     header("home.php");
 }
?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="styling.css">
        <meta charset="UTF-8">
        <title>E-Store</title>
    </head>
    <body>
        <div class="wrapper">
            <?php
                include 'includes/header.php';
                ?>
                <div class="container">
                    <div class="jumbotron">
                        <h1>Welcome to the E-Store</h1>
                        <p>
                            We have the Best electronics. Best Brands.
                            Cheapest Prices. Everything at one place.
                        </p>
                    </div>   
                </div>
                <div class="container" style="text-align: center">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 thumbnail">
                            <img src="img/apple11.jpg" alt="Apple 11">
                            <h3>Apple iPhone 11(64GB)</h3>
                            <p>Price:Rs. 63,000.00</p>
                            <a href="login_page.php" class="btn btn-primary btn-block">Order Now</a>

                        </div>
                        <div class="col-md-4 col-sm-6 thumbnail">
                            <img src="img/applexr.jpg"  style="max-width: 71%" alt="iPhone XR">
                            <h3>Apple iPhone XR(64GB)</h3>
                            <p>Price:Rs. 53,000.00</p>
                            <a href="login_page.php" class="btn btn-primary btn-block">Order Now</a>
                        </div>
                        <div class="col-md-4 col-sm-6 thumbnail">
                            <img src="img/oppof11.jpg"  style=" padding-top: 8%; padding-bottom: 7%;max-width: 85%" alt="Oppo F11">
                            <h3>Oppo F11</h3>
                            <p>Price:Rs. 15,000.00</p>
                            <a href="login_page.php" class="btn btn-primary btn-block">Order Now</a>
                        </div>

                    </div>
                </div>
                <div class="container" style="text-align: center">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 thumbnail">
                            <img src="img/panasonic.jpg"  style="max-width: 60%" alt="Panasonic Eluga">
                            <h3>Panasonic Eluga Ray 810</h3>
                            <p>Price:Rs. 20,000.00</p>
                            <a href="login_page.php" class="btn btn-primary btn-block">Order Now</a>
                        </div>
                        <div class="col-md-4 col-sm-6 thumbnail">
                            <img src="img/redminote8.jpg" style="margin-bottom: -4%" alt="Watch1">
                            <h3>Redmi Note 8 Pro</h3>
                            <p>Price:Rs. 16,000.00</p>
                            <a href="login_page.php" class="btn btn-primary btn-block">Order Now</a>
                        </div>
                        <div class="col-md-4 col-sm-6 thumbnail">
                            <img src="img/samsung.jpg"  style="max-width: 48%" alt="Watch1">
                            <h3>Samsung Galaxy M21</h3>
                            <p>Price:Rs. 14,000.00</p>
                            <a href="login_page.php" class="btn btn-primary btn-block">Order Now</a>
                        </div>

                    </div>
                </div>
        </div>
        
        
        <div style="padding-top: 7%; position: relative">
            <?php
            include 'includes/footer.php';
            ?>
        </div>
        
        
        
    </body>
</html>
