<?php
session_start();

// connection to database
$con = mysqli_connect('localhost','root','mysql','test');
//store name from the form post method
$name = $_POST['user']; 
//store password from the form post method
$pass = $_POST['password'];
//query to select the table
$s = "select * from volunteer where name = '$name' && password = '$pass'";

// if the username and password is correct it will direct user to the home
// else he will stay in the login page
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
        // the session is for welcoming every user by his name
        $_SESSION['username'] = $name;
        header('location:home.php');
    }

?>