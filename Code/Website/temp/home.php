<?php
session_start();
include('db.php'); //Database Connection.
if (!isset($_SESSION['github_data'])) {
// Redirection to application index page.
header("location: index.php");
}
else
{
//$userdata=$_SESSION['github_data'];
//$email = $userdata->email;
//$fullName = $userdata->name;
//$company = $userdata->company;
//$blog = $userdata->blog;
//$location = $userdata->location;
//$github_id = $userdata->id;
//$github_username = $userdata->login;
//$profile_image = $userdata->avatar_url;
//$github_url = $userdata->url;

$userdata=$_SESSION['github_data'];
$email = 'test1';
$fullName = 'test2';
$company = 'test3';
$location = 'test4';
$github_id = 'test5';
$github_username = 'test6';
$profile_image = 'test7';
$github_url = 'test8';

$q=mysqli_query($connection,"SELECT id FROM users WHERE email='$email'");
if(mysqli_num_rows($c) == 0)
{
$count=mysqli_query($connection,"INSERT INTO users(email,fullname,company,blog,location,github_id,github_username,profile_image,github_url) VALUES('$email','$fullName','$company','$blog','$location','$github_id','$github_username','$profile_image','$github_url')");
}
print_r($userdata); // Full data
echo "<a href='logout.php'>Logout</a>";
}
?>