<?php
$host = 'l7cup2om0gngra77.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$username = 'ow19auwyd94iw9mw';
$password = 'qgk9ho9jvrc43iar';
$database = 'eymvidpjksf4tewt';
$port = 3306;

// Create connection
$con = new mysqli($host, $username, $password, $database, $port);

// Check connection
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
} else {
    echo "Connected successfully";
}

// Your Website URL Goes Here
$url = "https://rasheedfoundation.org";

// Set Blog Activation Bonus Here (It must be only Number)
$blog_bonus = "10";
// Set Article Activation Bonus Here (It must be only Number)
$art_bonus = "10";
// Set Daily Login Bonus Here (It must be only Number)
$login_bonus = "10";
// Set Currency Symbol for daily login bonus Here
$money = "$";
?>
