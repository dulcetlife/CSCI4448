<?php
require_once('githubConf.php');
require_once('functions.php');
if(isset($_GET['code']))
{
    $fields = array( 'client_id'=>clientID, 'client_secret'=>clientSecret, 'code'=>$_GET['code']);
    $postvars = '';
    foreach($fields as $key=>$value) {
        $postvars .= $key . "=" . $value . "&";
    }
    
    $data = array('url' => 'https://github.com/login/oauth/access_token',
                  'data' => $postvars,
                  'header' => array("Content-Type: application/x-www-form-urlencoded","Accept: application/json"),
                  'method' => 'POST');
    
    $gitResponce = json_decode(curlRequest($data));
    
    if($gitResponce->access_token)
    {
        $data = array('url' => 'https://api.github.com/user?access_token='.$gitResponce->access_token,
                      'header' => array("Content-Type: application/x-www-form-urlencoded","User-Agent: ".appName,"Accept: application/json"),
                      'method' => 'GET');
        
        $gitUser = json_decode(curlRequest($data));
        
        echo '
        <table>
            <tr>
                <td colspan="2"><a href="'.$gitUser->html_url.'" target="_blank"><img src="'.$gitUser->avatar_url.'" width="200px" height="200px"/></a></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td>'.$gitUser->name.'</td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>'.$gitUser->email.'</td>
            </tr>
            <tr>
                <td>Location:</td>
                <td>'.$gitUser->location.'</td>
            </tr>
            <tr>
                <td>Website:</td>
                <td>'.$gitUser->blog.'</td>
            </tr>
        </table>';
        
    }
    else
    {
        echo "Some error occured try again";
    }
}
else
{
    echo '<a href="https://github.com/login/oauth/authorize?scope=user:email&client_id='.clientID.'" title="Login with Github">
    <img src="login-with-Github.png" />
    </a>';
}
 
 
?>