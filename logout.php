<?php
include 'includes/common.php';
if(!isset($_SESSION['email']))
{
    header("Location: home.php");
}
session_destroy();
header("Location: home.php");

?>
