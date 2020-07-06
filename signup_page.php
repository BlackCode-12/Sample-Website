<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
require 'includes/common.php';
/*if(isset($_SESSION['email']))
{
    header("Location: products.php");
}*/
?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="styling.css">
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="wrapper">
            <?php
            include 'includes/header.php';
            ?>
            <div class="container">
                <div class="row" >
                    <div class="col-xs-6">
                        <img src="img/signup.png" alt="SignUp.png" class="img-responsive"
                             >
                    </div>
                    <div class="col-xs-4">
                        <form method="post" action="signup_submit.php">
                            <h2 style="margin-bottom: 2px;">SIGN UP</h2>
                            <div class="form-group">
                                <input class="form-control" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                                <div><?php if(isset($_GET['email_error'])){
                                    echo $_GET['email_error'];
                                } elseif (isset($_GET['email_exist_error'])) {
                                echo $_GET['email_exist_error'];
                            }?></div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="passw" placeholder="Password">
                                <div><?php if(isset($_GET['password_error'])){
                                    echo $_GET['password_error'];
                                } ?></div>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="contact" placeholder="Contact">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="address" placeholder="Address">
                            </div>
                            <button class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'includes/Footer.php';
        ?>
        
    </body>
</html>
