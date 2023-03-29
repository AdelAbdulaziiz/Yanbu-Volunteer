<?php
//it will destroy the session when the user logout
session_start();
session_destroy();
//header to redirect the user to login
header('location:login.php');
?>