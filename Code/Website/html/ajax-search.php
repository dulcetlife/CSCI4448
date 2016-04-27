<?php
session_start();


include_once ('database_connection.php');//Including our DB Connection file

//echo "URL params:"
//echo $_SERVER['QUERY_STRING'];
 

if(isset($_GET['keyword'])){//IF the url contains the parameter "keyword"
 $keyword =     trim($_GET['keyword']) ;//Remove any extra  space
$keyword = mysqli_real_escape_string($dbc, $keyword);//Some validation
//echo $keyword;

if(isset($_GET['filter'])){//IF the url contains the parameter "filter"
 $filter =     trim($_GET['filter']) ;//Remove any extra  space
 $filter = mysqli_real_escape_string($dbc, $filter);//Some validation
 
}

if ($filter)
{

	$query = "SELECT repo_name, username, language, readme FROM repos WHERE repo_name LIKE '%$keyword%' AND username LIKE '%$filter%' OR username LIKE '%$keyword%' AND username LIKE '%$filter%' OR language LIKE '%$keyword' AND username LIKE '%$filter%' OR readme LIKE '%$keyword%' AND username LIKE '%$filter%'";

}

else

{

$query = "SELECT repo_name, username, language, readme FROM repos WHERE repo_name LIKE '%$keyword%' OR username LIKE '%$keyword%' OR language LIKE '%$keyword%' OR readme LIKE '%$keyword%'";
//The SQL Query that will search for the word typed by the user .
}
$i =0;
$result = mysqli_query($dbc,$query);//Run the Query
if($result){//If query successfull
 if(mysqli_affected_rows($dbc)!=0){//and if atleast one record is found
 while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){//Display the record
 	//if($i == 20)
 	//{
 		//break;
 	//}
 	$_SESSION['repo_name'] = $row['repo_name'];

 	$URL=$_SESSION['repo_name'];
 	$urlDisplay = '<p><a href=/temporaryStorage.php?'.$URL.' <b>'.$row['repo_name'].'</a></b> '.'</p>';
 	echo $urlDisplay;
 	//$i++;

 }

 }else {
 echo 'No Results for :"'.$_GET['keyword'].'"';//No Match found in the Database
 }

}
}else {
 echo 'Parameter Missing in the URL';//If URL is invalid
}

?>