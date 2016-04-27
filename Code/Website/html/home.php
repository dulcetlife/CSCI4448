<?php
session_start();
include('database_connection.php'); //Database Connection.
if (!isset($_SESSION['github_data'])) {
// Redirection to application index page.
header("location: index.php");
}
else
{

$userdata=$_SESSION['github_data'];
$email = $userdata->email;
//$fullName = $userdata->name;
//$company = $userdata->company;
//$blog = $userdata->blog;
//$location = $userdata->location;
$github_id = $userdata->id;
$github_username = $userdata->login;
//$profile_image = $userdata->avatar_url;
$github_url = $userdata->url;



$q=mysqli_query($dbc,"SELECT id FROM users WHERE email='$email'");

if(mysqli_num_rows($c) == 0)
{
$count=mysqli_query($dbc,"INSERT INTO users(email,github_username,github_id,github_url) VALUES('$email','$github_username','$github_id','$github_url')");
}
print_r($userdata); // Full data
echo "<a href='logout.php'>Logout</a>";
}
?>