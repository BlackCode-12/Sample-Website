<?php
include 'includes/common.php';
$item_id = $_GET['id'];
$user_id = $_SESSION['user_id'];
$query_insertion = "INSERT INTO user_items(user_id, item_id, status)"
        . " VALUES('$user_id', '$item_id', 'Added to cart')";
$data_after = mysqli_query($con, $query_insertion);
header("Location: home.php");
?>


