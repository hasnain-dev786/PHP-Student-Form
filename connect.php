<?php
$server = 'localhost';
$username = 'root';
$password = '';

// Establish connection
$connect = mysqli_connect($server,$username,$password);

if(!$connect){
die("connection not successful".mysqli_connect_error($connect));
}
else{
    // echo "connection success" ;
}


?>
