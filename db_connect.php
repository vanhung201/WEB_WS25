<?php
$conn = mysqli_connect("127.0.0.1", "root", "","nsmykfrvhosting_ws25");

// Check connection
if($conn === false){

    die("ERROR: Could not connect. ". mysqli_connect_error());
}
?>