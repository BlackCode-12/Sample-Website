<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require 'includes/common.php';
if(!isset($_SESSION['email']))
{
    header("Location: home.php");
}
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
            <?php include 'includes/header.php';
            ?>
            <div class="container">
                <div class="row" style="margin: auto; margin-left: 33%">
                    <div class="col-xs-6">
                            <h3>Change Password</h3>
                            <form method="post" action="settings_script.php">
                                <div class="form-group">
                                    <input type="password" class="form-control" name="OldPassw" placeholder="Old Password">
                                    <div>
                                        <?php if(isset($_GET['password_wrong'])){
                                                echo $_GET['password_wrong'];
                                            } 
                                        ?>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="password" class="form-control" name="NewPassw" placeholder="New Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="ReNewPassw" placeholder="Re-type New Password">
                                    <div>
                                        <?php if(isset($_GET['password_mismatch'])){
                                                echo $_GET['password_mismatch'];
                                            } 
                                        ?>
                                    </div>
                                </div>
                                <button class="btn btn-primary">Submit</button>
                                
                            </form>
                            
                    </div>
                </div>
            </div>
        </div>
        <div style="max-width: 50%; margin-left: 25%">
            <h1><?php if(isset($_GET['password_saved'])){
                    echo $_GET['password_saved'];
                } 
                ?></h1>
        </div>
        <?php
        include 'includes/Footer.php';
        ?>
    </body>
</html>
