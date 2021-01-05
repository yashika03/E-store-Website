<?php
$con = mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
session_start();
    $name = mysqli_real_escape_string($con, $_POST["name"]);
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $password = mysqli_real_escape_string($con, $_POST["password"]);
    $contact = mysqli_real_escape_string($con, $_POST["contact"]);
    $city = mysqli_real_escape_string($con, $_POST["city"]);
    $address = mysqli_real_escape_string($con, $_POST["address"]);
    $hashed_password = md5($password);
    $email_pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$";
    $select_query="SELECT * FROM users WHERE email = '$email'";
    $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
    $total_rows=mysqli_num_rows($select_query_result);
    if($total_rows!=0)
    {
        echo "<center><b><h2>Email already exists. Try another.</h2></b></center>";
    }
    else
    {
        $registration_query="insert into users(name,email,password,contact,city,address) values('$name','$email','$hashed_password','$contact','$city','$address')";
        $registration_query_result=mysqli_query($con,$registration_query) or die(mysqli_error($con));
        $_SESSION['name']=$name;
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;
        $_SESSION['id']=mysqli_insert_id($con);
        header("location:index.php");
    }
?>
