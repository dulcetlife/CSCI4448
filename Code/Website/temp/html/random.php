<?php 
	Session.start(); 
	$count = SELECT COUNT(*) FROM `table`; 
	$rand = mt_rand(1, $count); 
	SELECT `column` FROM `table` LIMIT $rand, 1 
?>
