<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require 'includes/common.php';
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
            <div class="container" id="pad_c">
                <div class="row" style="margin: auto; margin-left: 33%">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Login
                            </div>
                            <div class="panel-body">
                                <p class="text-warning">Login to make a purchase</p>
                                <form method="post" action="login_submit.php">
                                    <div class="form-group">
                                        <input class="form-control input-md" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control input-md" name="passw" placeholder="Password">
                                    </div>
                                    <button class="btn btn-primary" id="padd">Login</button>
                                </form>
                                
                            </div>
                            <div class="panel-footer">
                                Don't have an account?
                                <a href="signup_page.php">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include 'includes/footer.php';
        ?>
        
    </body>
</html>



