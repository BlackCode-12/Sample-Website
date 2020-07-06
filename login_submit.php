<?php
include 'includes/common.php';

$email = mysqli_real_escape_string($con,$_POST['email']);
$passw = mysqli_real_escape_string($con,$_POST['passw']);
$password = $passw;

$query = "select id,email,passw from store.users where email = '$email' and passw = '$password'";
$data_we_get = mysqli_query($con, $query);
if (mysqli_num_rows($data_we_get) == 0)
{
    
    header("Location: login_page.php");
}
else
{
    $arr1 = mysqli_fetch_array($data_we_get);
    $_SESSION['email'] = $arr1['email'];
    $_SESSION['user_id'] = $arr1['id'];
    header("Location: home.php");
}

        
?>


