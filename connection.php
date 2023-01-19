<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname ="ard";
if($con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    // echo "connected";
}
else{
    echo "Failed to connect";
    
}
?>