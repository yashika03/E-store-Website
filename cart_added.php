    <html>
        <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <title>
                Added to Cart
            </title>
        </head>
        <body>
            <?php
            $con= mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
            session_start();
            if(isset($_SESSION['id']))
            {
                $user_id=$_SESSION['id'];
                $item_id=$_POST['item_id'];
                if($item_id<=6)
                {
                    $user_registration="insert into users_items(user_id,item_id,status) values('$user_id','$item_id','Added to Cart')";
                    $user_registration_result=mysqli_query($con,$user_registration) or die(mysqli_error($con));                   
            ?>
            <div class="container">
                <center>
                    <h3 style="color:purple;">Item has been successfully added to the cart</h3>
                </center>
            </div>
            <div class="container">
                <center>
                    <br><h3 style="color:red;">Thanks for purchasing the product.</h3><br><br>
                    <h3><a href="index.php">Continue Shopping</a></h3><br>
                    <p>or</p><br>
                    <h3><a href="cart.php">Move to Cart</a></h3>
                </center>
            </div> 
            <?php
                }
                else
                {
                    echo "<center><h3><b>Wrong item ID. Please check item ID before entering</b></h3></center>";?>
            <button class="btn btn-primary"><a href="index.php"><h3>Try Again</h3></a></button>
            <?php
                }
            }
            ?>
        </body>
    </html>

