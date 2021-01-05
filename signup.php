<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>
            Sign Up
        </title>
        <style>
            #footer_style{
            padding:10px 0;
            background-color:#101010;
            color:#9d9d9d;
            bottom:0;
            width:100%;}
        </style>
    </head>
    <body>
        <?php
        include 'header_logged_out.php';
        ?>
        <div class="container" style="margin-top:80px; margin-bottom:50px;">
                <div class="row row_style">
                    <div class="col-xs-6">
                        <img src="signuppic.jpg" alt="image">
                    </div>
                    <div class="col-xs-6">
                        <form action="signup_script.php" method="post">
                            <div class="form-group">
                                <h1>SIGN UP</h1>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Name" name="name" class="form-control input-lg">
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="Email" name="email" class="form-control input-lg" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password" name="password" class="form-control input-lg" required="true" pattern=".{6,}">
                            </div>
                            <div class="form-group">
                                <input type="contact" placeholder="Contact" name="contact" class="form-control input-lg" required="true" pattern=".{10}">
                                <div><?php //echo $_GET['contact_error']; ?></div>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="City" name="city" class="form-control input-lg" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Address" name="address" class="form-control input-lg" required="true">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" style="float:right;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>

