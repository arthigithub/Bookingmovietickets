<?php
	
	require"connect.php";

	$query = "CREATE TABLE movdetail(`id` INT(50) AUTO_INCREMENT NOT NULL,`movietitle` VARCHAR(30) NOT NULL,`year` INT(10) NOT NULL,`duration` FLOAT(20) NOT NULL,`language` VARCHAR(20) NOT NULL,`rating` VARCHAR(10) NOT NULL,`casting` VARCHAR(50) NOT NULL,`image` VARCHAR(50) NOT NULL,`trailer` VARCHAR(500) NOT NULL, PRIMARY KEY(`id`))";
	$result = mysqli_query($connect,$query);
		
		if($result == 1){
			echo "CREATED SUCCESSFULLY";
		}else{
			echo "try again";
		}

?>