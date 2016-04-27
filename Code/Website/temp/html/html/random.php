<?php 
	session.start(); 
 
	$count = mysqli_query($connection, "SELECT COUNT(*) FROM repos;"); 
	$rand = mt_rand(1, $count); 
	$id = mysqli_query($connection, "SELECT `id` FROM repos WHERE id = $rand;");  
?>
