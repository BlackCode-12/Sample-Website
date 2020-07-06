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
    header("Location: index.php");
}
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="styling.css">
        <title>LifeStyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="wrapper">
        <?php
        include 'includes/header.php';
        $user_id = $_SESSION['user_id'];
        $query = "UPDATE store.user_items SET status = 'Confirmed' WHERE user_items.user_id = $user_id";
        $result = mysqli_query($con, $query);
        
        ?>
        <div class="container" >
            <div class="jumbotron" style="max-width: 50%; margin-left: 25%">
                <h1 style="text-decoration: blue; text-align: center">Confirmed!!</h1>
                <p>Your order is Confirmed. 
                    Thanks for shopping with us.
                    <a href="home.php">Click Here </a>to purchase any other item.</p>
                
            </div>
        </div>
        </div>
        <?php
        include 'includes/Footer.php';
        ?>
    </body>
</html>
