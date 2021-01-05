<?php
$con=mysqli_connect("localhost","root","","store") or die(nysqli_error($con));
session_start();
$old_password= mysqli_real_escape_string($con,$_POST['old_password']);
$new_password=mysqli_real_escape_string($con,$_POST['new_password']);
$retype_new_password=mysqli_real_escape_string($con,$_POST['retype_new_password']);
$hashed_old_pass=md5($old_password);
$hashed_new_pass=md5($new_password);
$hashed_retype_new_pass=md5($retype_new_password);
$user_id=$_SESSION['id'];
$user_password=$_SESSION['password'];
$hashed_user_pass=md5($user_password);
if($hashed_old_pass==$user_password)
{
    if($hashed_new_pass==$hashed_retype_new_pass)
    {
        $update_query= "update users set password='$hashed_new_pass' where id='$user_id'";
        $update_query_result=mysqli_query($con,$update_query) or die(mysqli_error($con));
        $_SESSION['password']=$hashed_new_pass;
        echo "<center><b><h2>Password updated successfully</h2></b></center><br><br>";
?>
<center>
    <a href="index.php" style="color:red;"><b><h2>Continue Shopping</h2></b></a>
</center>
<?php
    }
    else
    {
      echo "<center><b><h2>Re-Type Password didn't match the new Password.</h2></b><br><br> Enter again the details.</center>";
    }
}
else
{
    echo $hashed_old_pass."<br>";
    echo $user_password."<br>";
    echo $old_password."<br>";
    echo $user_password."<br>";
    echo "<center><b><h2>Old Password entered is wrong.</h2></b></center>";
}
?> 

