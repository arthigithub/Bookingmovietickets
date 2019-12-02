<?php
	require "../db/connect.php";

	$id = $_REQUEST['id'];

	$query = "DELETE FROM `movdetail` WHERE `id`=".$id;

	$result = mysqli_query($connect, $query);

	if($result == 1){
		header("Location: index.php");
	}else{
		echo "ERROR IN DELETING MOVIE..";
	}

?>
