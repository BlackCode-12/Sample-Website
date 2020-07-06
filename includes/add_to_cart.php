<?php 
function add_to_cart_button($item_id)
{
    if(!isset($_SESSION['email'])){ ?>
    <p><a href="login_page.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
    <?php } else {
        if(check_if_added_to_cart($item_id))
        {
            echo '<a href="home.php" class="btn btn-block btn-success" disabled>Added to '
            . 'cart</a>';
        } else {
            ?>
            <a href="cart_add.php?id=<?php echo $item_id ?>" name="add" value="add" class="btn btn-block
            btn-primary">Add to cart</a>
            
             <?php
        }
    }
}

?>

