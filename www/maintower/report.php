<?php 
	include '../connection.php';

	if ($_GET['id']){
     	$id = $_GET['id'];
	 }	

	if (mysqli_num_rows(mysqli_query($connection, "SELECT * FROM main_tower WHERE id='$id'"))>0) {
		$result = mysqli_query($connection, "SELECT * FROM main_tower WHERE id='$id'");
		echo mysqli_fetch_array($result)['content'];
	} else {
		echo "<h1>404! Нет такой страницы!</h1>";
	}

	
			
		
	

	 

?>