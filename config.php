<?php

// Connecting to the database
$servername = "sql201.epizy.com";
$username = "epiz_29188578";
$password = "uXrBrML2ZDpyb";
$database = "epiz_29188578_sparks_foundation_bank";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
        die("Unable to connect to the database due to the following error: ".mysqli_connect_error());
}

?>