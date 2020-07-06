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
            <?php
            include 'includes/header.php';
            $user_id = $_SESSION['user_id'];
            $query = "SELECT user_items.user_id, items.name,
                items.price, items.pid FROM user_items INNER JOIN
                items ON user_items.item_id = items.pid
                WHERE user_id = $user_id";
            $dataa = mysqli_query($con, $query);
            $my =mysqli_num_rows($dataa); 
            $sum = 0;

                    
            ?>
        <div class="container">
            <table class="table table-striped table-responsive">
                <tbody>
                    <tr>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th></th>
                     </tr>
                    <?php
                    while($my > 0){
                        $rows = mysqli_fetch_array($dataa);
                        $id = $rows['pid'];
                        $name = $rows['name'];
                        $price = $rows['price'];
                        ?>
                     <tr>
                        <th><?php echo $id; ?></th>
                        <th><?php echo $name; ?></th>
                        <th><?php echo $price; ?></th>
                        <th> <a href='cart_remove.php?id=<?php echo $rows['pid'] ?>' 
                                class='remove_item_link'> Remove</a></th>
                     </tr>
                        
                    <?php $my = $my - 1;
                    $sum = $sum + $price; } ?>
                    <tr>
                        <th></th>
                        <th>Total</th>
                        <th><?php echo $sum; ?></th>
                        <?php
                if($sum == 0)
                {
                    ?>
                    <th><a href="#" class="btn btn-primary">CART EMPTY</a></th>
                <?php } else {
                    ?>
                    <th><a href="success.php" class="btn btn-primary">Confirm Order</a></th>
                <?php }
                ?>
                        
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
        <?php
        include 'includes/Footer.php';
        ?>
    </body>
</html>
