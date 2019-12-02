<?php
	
	$hostname = "localhost";
	$dbUsername = "book";
	$dbPassword = "book@123";
	$dbName = "book";
	
	
	
	$connect = mysqli_connect($hostname,$dbUsername,$dbPassword,$dbName);
	
	if(!$connect){
		echo "ERROE IN CONNECTION......!";
	}else{

	
	}
?>