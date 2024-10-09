<?php
$severname = "localhost";
$username = "root";
$password = "";
$database = "name of data base here";

//Create a connection 
$conn = mysqli_connect($severname, $username, $password, $database);

//Check the connection
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}
?>