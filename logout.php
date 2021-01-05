<?php
session_start();
session_unset();
session_destroy();
header("location:index.php");
?>
<?php require 'login_modal.php'; ?>

