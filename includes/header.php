<nav class="navbar navbar-inverse narbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target ="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="home.php" class="navbar-brand">E-Store</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                    if(isset($_SESSION['email'])){?>
                        <li><a href="cart_page.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                        <li><a href="Settings_page.php"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li> 
                    <?php }
                    else{
                        ?>
                        <li><a href="signup_page.php"><span class="glyphicon glyphicon-user"></span>Signup</a></li>  
                        <li><a href="login_page.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a href="about_us.php"><span class="glyphicon glyphicon-tasks"></span>About Us</a></li>  
                        <li><a href="contact_us.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                    <?php } ?>            
            </ul>  
        </div>
    </div>
</nav>