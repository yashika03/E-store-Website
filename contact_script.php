<?php
        $con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
	session_start();
        $name=mysqli_real_escape_string($con, $_POST['name']);
	$email=mysqli_real_escape_string($con, $_POST['email']);
	$message=mysqli_real_escape_string($con, $_POST['message']);
        $user_reg="insert into contact(name,email,message) values('$name','$email','$message')";
        $result=mysqli_query($con, $user_reg) or die(mysqli_error($user_reg));
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>
            Settings
        </title>
    </head>
    <body>
        <div class="container" style="margin-top:100px;">
            <center>
            <div class="jumbotron">
                <h2 style="color:red;">Your contact information has been saved.</h2>
            </div>
            </center>
        </div>
    </body>
</html>
