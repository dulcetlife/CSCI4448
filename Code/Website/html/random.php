<?php
        session.start();
        if(isset($_POST['rand'])) {
        include_once ('database_connection.php');//Including our DB Connection file

        $count = mysqli_query($dbc, "SELECT COUNT(*) FROM repos;");
        $rand = mt_rand(1, $count);
        $id = mysqli_query($dbc,  "SELECT id FROM repos WHERE id = '%$rand%';");


        $query = "SELECT repo_name, username, language, readme FROM repos WHERE id LIKE '%$id%'";
//The SQL Query that will search for the word typed by the user .

$result = mysqli_query($dbc,$query);//Run the Query
if($result){//If query successfull
 if(mysqli_affected_rows($dbc)!=0){//and if atleast one record is found
 while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){ //Display the record
        //$repo_name =
        //$readme =
        $_SESSION['repo_name'] = $row['repo_name'];
        $_SESSION['readme'] = $row['readme'];
        $_SESSION['language'] = $row['language'];
	header("Location: view_project.php");
 echo '<p><a href="view_project.php" <b>'.$row['repo_name'].'</a></b> '.'</p>'   ;
 }
 }

}
}
else {
 echo 'Parameter Missing in the URL';//If URL is invalid
}
?>
