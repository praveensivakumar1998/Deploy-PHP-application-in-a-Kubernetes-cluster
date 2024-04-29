<?php
define('DB_SERVER','dcv-rds.coui17paxgl1.ap-south-1.rds.amazonaws.com');
define('DB_USER','admin');
define('DB_PASS' ,'Welcome123');
define('DB_NAME', 'db-php');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>

