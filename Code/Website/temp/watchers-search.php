<?php
session_start();

include_once ('database_connection.php');//Including our DB Connection file
if(isset($_GET['keyword'])){//IF the url contains the parameter "keyword"
 $keyword =     trim($_GET['keyword']) ;//Remove any extra  space
$keyword = mysqli_real_escape_string($dbc, $keyword);//Some validation

$query = "SELECT repo_name, username, language, readme, watchers, html_url, forks FROM repos ORDER BY watchers ASC";
//The SQL Query that will search for the word typed by the user .

$result = mysqli_query($dbc,$query);//Run the Query
if($result){//If query successfull
 if(mysqli_affected_rows($dbc)!=0){//and if atleast one record is found
 while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){ //Display the record
 	foreach($row['username'] as $i)
 	{
 		$_SESSION[$i] = $i;
 	}
 	$repo_name = $row['repo_name'];
 	$readme = $row['readme'];
 	//$_SESSION['repo_name'] = $repo_name;
 	//$_SESSION['readme'] = $readme;
 echo '<p><a href="view_watchers.php" <b>'.$row['language'].'</a></b> '.'</p>'   ;
 }
 }else {
 echo 'No Results for :"'.$_GET['keyword'].'"';//No Match found in the Database
 }

}
}else {
 echo 'Parameter Missing in the URL';//If URL is invalid
}

?>