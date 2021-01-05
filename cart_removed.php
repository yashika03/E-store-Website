<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>
            Removal of Cart
        </title>
    </head>
    <body>
        <?php
        $con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
        session_start();
        if(isset($_SESSION['id']))
        {
        $user_id=$_SESSION['id'];
        $item_id=$_POST['item_id'];
        if($item_id<=6)
        {
        $user_removal="delete from users_items where user_id='$user_id' and item_id='$item_id'";
        $user_removal_result=mysqli_query($con,$user_removal) or die(mysqli_error($con));
        ?>
        <div class="container">
            <div class="jumbotron">
            <center>
                <h3 style="color:purple;">Item has been removed successfully from the cart.</h3><br>
            </center>
            <center>
                <h2><a href="index.php">Continue Shopping</a></h2><br>
                <p>or</p><br>
                <h2><a href="cart.php">Move to Cart</a></h2>
            </center>
            </div>
        </div>
        <?php
        }
        else
        {
            echo "<center><h3><b>Item ID is wrong . Please check the ID before entering data.</b></h3></center>";
        ?>
    <center><button class="btn btn-primary"><a href="index.php"><h3>Try Again</h3></a></button></center>
        <?php
        }
        }
        ?>
    </body>
</html>
