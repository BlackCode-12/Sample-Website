<?php

$con = mysqli_connect("localhost","root", "", "store") or 
        die(mysqli_errno($con));
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

?>

