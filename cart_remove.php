<?php

include 'includes/common.php';
$user_id = $_SESSION['user_id'];
$pid = $_GET['id'];
$query = "DELETE FROM store.user_items WHERE user_items.item_id = $pid";
$result = mysqli_query($con, $query);
header("Location: cart_page.php");

?>

