<?php
require 'includes/common.php';
$email1 = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

if(!preg_match($regex_email, $email1))
{
    header("Location: signup_page.php?email_error=Enter correct email");
}
$password1 = $_POST['passw'];
if(strlen($password1) < 6)
{
    header("Location: signup_page.php?password_error=Enter correct password");
}

$email1 = mysqli_real_escape_string($con,$email1);
$password1 = mysqli_real_escape_string($con,$password1);

$query = "select id,email,passw from store.users where email = '$email1' and passw = '$password1'";
$data_we_get = mysqli_query($con, $query);
if (mysqli_num_rows($data_we_get) != 0)
{
    header("Location: signup_page.php?email_exist_error=Email already exists");
}
else
{
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $contact = $_POST['contact'];
    $city = mysqli_real_escape_string($con,$_POST['city']);
    $address = mysqli_real_escape_string($con,$_POST['address']);
    $insert_query = "insert into store.users(name,email,passw,contact,city,address)"
            . " VALUES('$name','$email1','$password1',$contact,'$city','$address')";
    echo $insert_query;
    $data_submitted = mysqli_query($con, $insert_query) or 
            die(mysqli_errno($con));
    $id_new = mysqli_insert_id($con);
    session_start();
    $_SESSION['email'] = $email1;
    $_SESSION['user_id'] = $id_new;
    header("Location: home.php");
}

?>


