<?php

require "connect.php";

$query = "CREATE TABLE admin (`id` INT(99) AUTO_INCREMENT NOT NULL, `name` VARCHAR(150) NOT NULL, `username` VARCHAR(60) NOT NULL, `password` VARCHAR(100) NOT NULL, `email` VARCHAR(50) NOT NULL, `phone` VARCHAR(50) NULL, PRIMARY KEY (`id`) )";                     

$result = mysqli_query($connect, $query);

if($result == 1){
	echo "TABLE CREATED SUCCESSFULLY..";
}else{
	echo "ERROR....";
}

?>