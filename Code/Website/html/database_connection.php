<?php
DEFINE('DATABASE_USER', 'root');
DEFINE('DATABASE_PASSWORD', 'csci4448');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'github_repo');

// Make the connection:
$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,
 DATABASE_NAME);

if (!$dbc) {
 trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
}
?>