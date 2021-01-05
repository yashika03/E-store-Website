 <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand"> E-Store</a> 
        </div>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a  href = "signup.php"><span class = "glyphicon glyphicon-user"></span> Sign Up </a></li>
                <li><a  data-toggle="modal" data-target="#mod" ><span class = "glyphicon glyphicon-log-in"></span> Login </a></li>
                <li><a  href = "about.php"><span class = "glyphicon glyphicon-list"></span> About Us </a></li>
                <li><a  href = "contact.php"><span class = "glyphicon glyphicon-phone"></span> Contact Us </a></li>      
            </ul>
        </div>
    </div>
</nav>
<?php
include 'login_modal.php';
?>

