<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Contact</title>
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
        <div class="container" style="margin-top:80px;">
            <div class="row row_style">
                <div class="col-xs-10">
                    <h1>LIVE SUPPORT</h1>
                    <h4>24hours | 7 days a week | 365 days a year live technical support </h4>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
                        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. 
                        There are many variants of passaages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. 
                        If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                    </p>
                </div> 
                <div class="col-xs-2">
                    <img src="livesupport.png" alt="image">
                </div>
            </div>
            <div class="row row_style">
                <div class="col-xs-8">
                    <form action="contact_script.php" method="post">
                        <div class="form-group">
                        <h1>CONTACT US</h1>
                        </div>
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" name="name" class="form-control input-lg">
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" name="email" class="form-control input-lg">
                        </div>
                        <div class="form-group">
                            <label>Message:</label>
                            <textarea rows="4"  name="message" class="form-control" name="message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="button" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-xs-2">
                    <h1>Company Information:</h1>
                    <p>500, Lorem Ipsum Dolor Sit,
                        <br>22-56-2-9 Sit Amet, Lorem,
                        <br>USA<br>Phone:(00)22-666-444
                        <br>Fax: (000) 22-444-111
                        <br>Email:info@mycompany.com
                        <br>Follow on:Facebook, Twitter
                        <br>
                    </p>
                </div>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
