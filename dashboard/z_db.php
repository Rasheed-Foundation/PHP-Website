<?php
$con = new mysqli("l7cup2om0gngra77.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "ow19auwyd94iw9mw", "qgk9ho9jvrc43iar", "eymvidpjksf4tewt");
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//Your Website URL Goes Here
$url="https://rasheedfoundation.com";


//Set Blog Activation Bonus Here (It must be only Number)
$blog_bonus ="10";
//Set Article Activation Bonus Here (It must be only Number)
$art_bonus="10";
//Set Daily Login Bonus Here (It must be only Number)
$login_bonus="10";
//Set Currency Symbol for daily login bonus Here
$money="$";
?>
