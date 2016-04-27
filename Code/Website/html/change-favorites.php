<?php
session_start();

if(isset($_GET['change'])){
$change = $_GET['change'];
}
if(isset($_GET['repo_name'])){
$repo_name = $_GET['repo_name'];
}

// If the request is valid:
if ($change == 'remove' or $change == 'add' or $change == 'random') {
	include_once ('database_connection.php'); //Including our DB Connection file
	// Set up DB query
	$query = '';
	echo $change;
	echo '<br>';
	if ($change == 'remove'){
		$query = "DELETE FROM favorites WHERE favorites.repo_id IN (SELECT id FROM repos WHERE repos.repo_name ='" . $repo_name . "');";
		header("location: favorites.php");
	}
	if ($change == 'add' or $change == 'random'){
		$query = "INSERT INTO favorites (repo_id) SELECT id FROM repos WHERE repos.repo_name = '" . $repo_name . "';";
		if($change == 'random')
		{
			header("location: view-random.php");
		}
		if($change == 'add')
		{
			header("location: favorites.php");
		}
	}
	
	echo $query;
	echo '<br>';
	$result = mysqli_query($dbc,$query);//Run the Query
	if($result){ //If query successful
	 if(mysqli_affected_rows($dbc)!=0){//and if atleast one record is found
	 while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){ //Display the record
	 	$repo_name = $row['repo_name'];
		echo $repo_name;
	  }
	 } else {
		 echo '<tr><td>No Favorites!</td></tr>';
	 }
	} else {
		echo '<tr><td>Database Error</td></tr>';
	}
		
		
}

?>
