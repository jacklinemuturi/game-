<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $databaseName = "jackie";
 
 $conn = mysqli_connect($servername, $username, $password, $databaseName);

if(!$conn){
    die("connection failed:".mysqli_error());
}

?>