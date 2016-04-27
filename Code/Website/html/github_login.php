<?php
require_once('githubConfig.php');
//require_once('/var/www/html/vendor/autoload.php');  
//Github_Autoloader::register(); 
if($_SERVER['REQUEST_METHOD'] == 'GET')
{
if(isset($_GET['code']))
{

//$client = new Github\Client();
//$user = $client->api('user')->show('dulcetlife');
//echo $user;
$test = 1;
//$git = new githubApi($config);
//$git->getUserDetails();
//$_SESSION['github_data']=$git->getAllUserDetails();
//$_SESSION['github_data'] = $user;

header("location: welcome.php");
}
else
{
$url = "https://github.com/login/oauth/authorize?client_id=".$config['client_id']."&redirect_uri=".$config['redirect_url']."&scope=user";
header("Location: $url");
}
}
?>