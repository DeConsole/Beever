<?php
$DBConnection = mysqli_connect("localhost","root","","beever");
// Check connection
if (mysqli_connect_errno()){
    echo "Database Connection Error: " . mysqli_connect_error();
}
?>