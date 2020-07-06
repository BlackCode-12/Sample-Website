<?php
include 'includes/common.php';
$old_pass = mysqli_real_escape_string($con, $_POST['OldPassw']);
$new_pass = mysqli_real_escape_string($con, $_POST['NewPassw']);
$re_new = mysqli_real_escape_string($con, $_POST['ReNewPassw']);

$user_id = $_SESSION['user_id'];

if($re_new == $new_pass)
{
    $query = "select id,email,passw from store.users where users.id = $user_id and passw = '$old_pass'";
    $data_we_get = mysqli_query($con, $query);
    if (mysqli_num_rows($data_we_get) == 0)
    {
        header("Location: Settings_page.php?password_wrong= The Password you Entered is incorrect!!");
    }
    else {
       $qu = "UPDATE store.users SET passw = '$new_pass' WHERE users.id = $user_id";
       $r1 = mysqli_query($con, $qu);
       header("Location: Settings_page.php?password_saved= The Password changed Successfully!!");
    }
}
 else {
    header("Location: Settings_page.php?password_mismatch=Passwords don't match");
}
?>
