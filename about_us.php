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
        <div class="wrapper">
            <?php
            include 'includes/header.php';
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-xs-6">
                        <h1>WHO ARE WE</h1>
                        <img src="img/whoweare.jpg" alt="E-store.jpg" class="img-responsive"
                             style="max-width: 100%">
                        <p style="text-align: justify;">We strive to have a
                            positive impact on customers,
                            employees, small businesses,
                            the economy, and communities.
                            Estorians are smart, passionate
                            builders with different backgrounds
                            and goals, who share a common desire
                            to always be learning and inventing
                            on behalf of our customers. We are always
                            there for our customers.</p>
                    </div>
                    <div class="col-lg-4 col-xs-6">
                        <h1>OUR HISTORY</h1>
                        <h3>2011</h3>
                        <p style="text-align: justify">
                            In 2011, E-store had 10,000
                            full-time employees in the US,
                            and by the end of 2016,
                            it had 140,000 employees.
                        </p>
                        <h3>2014</h3>
                        <p style="text-align: justify">
                            In 2014, E-store launched the Fire Phone.
                            The Fire Phone was meant to deliver media
                            streaming options but the venture failed,
                            resulting in E-store registering a $170
                            million loss. This would also lead to
                            the Fire Phone production being stopped
                            the following year. In August of the same
                            year, Amazon would finalize the acquisition
                            of Twitch, a social video gaming streaming
                            site for $970 million.
                            This new acquisition would be integrated
                            into the game production division of Amazon
                        </p>
                        <h3>2017- Present</h3>
                        <p style="text-align: justify">
                            2017, E-store announced that
                            it would acquire Whole Foods,
                            a high-end supermarket chain
                            with over 400 stores, for $13.4 billion.
                            The acquisition was seen by media experts
                            as a move to strengthen its physical
                            holdings and challenge Walmart's supremacy
                            as a brick and mortar retailer. This
                            sentiment was heightened by the fact that the announcement
                            coincided with Walmart's purchase of men's apparel
                            company Bonobos. On August 23, 2017, Whole Foods
                            shareholders, as well as the Federal Trade
                            Commission, approved the deal.
                        </p>
                    </div>
                    <div class="col-lg-4 col-xs-6">
                        <h1>OPPORTUNITIES</h1>
                        <h3 style="font: bold">Available Roles</h3>
                        <p style="text-align: justify">
                            1. Jr./Sr. Anroid Developer[Full time + 3 Months
                            internship also available]
                        </p>
                        <p style="text-align: justify">
                            2. Machine Learning Engineer[Full time]
                        </p>
                        <p style="text-align: justify">
                            3. Buisness Analyst[Full time + 8 months
                            internship available]
                        </p>
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


