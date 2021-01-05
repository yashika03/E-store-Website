<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>
            login
        </title>
    </head>
    <body>
        <div class="modal fade" id="mod" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">LOG IN</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="login_script.php">
                    <div class="form-group">
                        <p>Don't have an account?<a href="signup.php">Register</a></p>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <button class="btn btn-primary" type="submit" value="submit"  name="button">Login</button>

                </form>
            </div>
            <div class="modal-footer">
                <p><a href="forgot_password.php" style="float:left;">Forgot Password?</a></p>
            </div>
        </div>
        
    </div>
</div>
    </body>
</html>
