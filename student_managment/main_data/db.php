<?php

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", ""); // If your password is empty, leave it as an empty string
define("DATABASE", "cred_application");
$connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

if (!$connection) {
    die("Connection Failed: " . mysqli_connect_error());
} 

?>
