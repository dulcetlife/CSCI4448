<?php
session_start();

		header("Location: http://146.148.38.91/view_project.php");
		
		include_once ('database_connection.php');//Including our DB Connection file
		
		$URL_QUERY = $_SERVER['QUERY_STRING'];
		
		echo "NOTHING";
		echo $URL_QUERY;
		

		if(isset($URL_QUERY)){//IF the url contains the parameter "URL_QUERY"
		
			$Current_repo_name = mysqli_real_escape_string($dbc, $URL_QUERY);//Some validation

			$query = "SELECT repo_name, username, language, readme FROM repos WHERE repo_name LIKE '%$URL_QUERY%'";
		
			//The SQL Query that will search for the repo clicked by the user .

			$result = mysqli_query($dbc,$query);//Run the Query
			if($result){//If query successfull
 				if(mysqli_affected_rows($dbc)!=0){//and if atleast one record is found
 					while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){ //Display the record
 					//$repo_name = 
 					//$readme =  	


 					//Set session data for repo
 					$_SESSION['repo_name'] = $row['repo_name'];
 					$_SESSION['readme'] = $row['readme'];
 					$_SESSION['language'] = $row['language'];
 					$_SESSION['username'] = $row['username'];

 					echo $_SESSION['repo_name'];
 					echo $_SESSION['readme'];
 					echo $_SESSION['language'];
 					echo $_SESSION['username'];
 				}
 			}
 			else
 			{
 				echo "No record found in database for ", $URL_QUERY;
 			}
 		  }
 		  else
 		  {
 			echo "Unsuccessful Query for repo ", $URL_QUERY;
 		  }
		}
		else
		{
			echo "No URL parameter given";
		}

?>

<html>
<body>
</body>
</html>