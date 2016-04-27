
<?php
session_start()
$username = $_SESSION['usr'];
$_SESSION['count'] = 1;
$_SESSION['record'][$_SESSION['count']] = array();

include_once ('database_connection.php');//Including our DB Connection file
if(isset($_GET['keyword'])){//IF the url contains the parameter "keyword"
 $keyword =     trim($_GET['keyword']) ;//Remove any extra  space
$keyword = mysqli_real_escape_string($dbc, $keyword);//Some validation

$query = "SELECT username, repo_name, readme, watchers, language, stars FROM repos WHERE username = $username ORDER BY watchers ASC";
//The SQL Query that will search for the word typed by the user .

$result = mysqli_query($dbc,$query);//Run the Query
if($result){//If query successfull
 if(mysqli_affected_rows($dbc)!=0){//and if atleast one record is found
 while($row = mysqli_fetch_array($result)){ //Display the record
 	//$_SESSION['record'][$_SESSION['count']]['username'] = $row['username'];
 	$_SESSION['username'] = $row['username'];
 	//$_SESSION['count'] = $_SESSION['count'] + 1;

 	//$_SESSION['repo_name'] = $row['repo_name'];
}
 }else {
 echo 'No Results for :"'.$_GET['keyword'].'"';//No Match found in the Database
 }

}
}else {
 echo 'Parameter Missing in the URL';//If URL is invalid
}

?>