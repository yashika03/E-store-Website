<?php
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>
            Settings
        </title>
    </head>
    <body>
        <?php
        include "header_logged_in.php";
        ?>
        <div class="container">
            <div class="row" style="margin-top:50px;">
                <div class="col-xs-4">
                </div>
                <div class="col-xs-4">
                <form action="settings_script.php" method="post">
                    <div class="form-group">
                        <h3>Change Password</h3>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control input-lg" name="old_password" placeholder="Old Password">
                    </div>    
                    <div class="form-group">
                        <input type="password" class="form-control input-lg" name="new_password" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control input-lg" name="retype_new_password" placeholder="Re-type New Password">
                    </div>
                    <div class="form-group">
                        <button type="submit"  name="button" class="btn btn-primary" value="submit">Change</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </body>
</html>
