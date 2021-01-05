<?php
$con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
session_start();
$email=mysqli_real_escape_string($con, $_POST['email']);
$password=mysqli_real_escape_string($con, $_POST['password']);
$hashed_pass=md5($password);
$query="select id, name, email, password from users where email = '$email' and password = '$hashed_pass' ";
$result=mysqli_query($con, $query);
$row=mysqli_fetch_array($result);
if(mysqli_num_rows($result)==1)
{
    session_start();
    $_SESSION['id']=$row['id'];
    $_SESSION['name']=$row['name'];
    $_SESSION['email']=$email;
    $_SESSION['password']=$hashed_pass;
    header("location:index.php");
}
else
{
?>
<div style="size:20px;">
<?php
    echo "<center><br><br><br><h2><b>Wrong username or password</b></h2></br></br></br></center>";
}
?>
</div>
