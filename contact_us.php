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
        <meta charset="UTF-8">
        <title>E-Store</title>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1>LIVE SUPPORT</h1>
                    <h4>24 Hours| 7 days a week| 365 days a year Live Technical Support</h4>
                    <p>
                        We respect out customer's time
                        so we are always available live to
                        help in every way we can. Customer
                        satisfaction is more important for us.
                        So, we provide you this, a live system.
                        Submit your problems and it shall be
                        resolved by the time you say "Problem".
                        We strive to have a
                        positive impact on customers,
                        employees, small businesses,
                        the economy, and communities. SO we provide
                        you with the best of the best.
                    </p>
                </div>
                <div class="col-lg-4">
                    <img src="img/contact.png" alt="User.png" class="img-responsive" 
                         style="max-width: 70%" >
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <h1>Contact Us</h1>
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea class="form-control" rows="3" name="message"
                                      style="height: 90px"></textarea>
                        </div>
                        <button class="btn btn-primary" style="margin-bottom: 5%">Submit</button>
                    </form>
                </div>
                <div class="col-lg-5">
                    <h1>Company Information</h1>
                    <h5>14, New borne Street,
                        New Avenue,
                        Seattle,
                        USA
                    </h5>
                    <p>Phone: (+91) 0001 312332</p>
                    <p>Fax: 000 000 1111</p>
                    <p>Email: estore@official.com</p>
                    <p>Follow us on Facebook, Instagram and twitter</p>
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


