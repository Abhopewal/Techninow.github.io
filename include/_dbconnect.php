<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "techninow";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
    
   // echo "success";
//}
//else{
    die("connection not establish".mysqli_connect_error());
}
?>