<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'pbae';

// Create database connection
$conn = mysqli_connect($host,$user,$pass,$dbname);

if (!$conn) {
    error_log("Failed to connect to database : " . mysqli_error($conn));
    die('Internal server error');
}

// Selecting database to use
$db_select = mysqli_select_db($conn, $dbname);
if (!$db_select) {
    error_log('Database selection failed : ' . mysqli_error($conn));
    die('Internal server error');
}

?>