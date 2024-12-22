<?php
	$db_username = 'root';
	$db_password = '1234';

	try{
	$conn = new PDO( 'mysql:host=localhost:3306;dbname=finalproject_db', $db_username, $db_password );
	$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected";

	}catch(PDOException $e){
		echo "Connection Failed ". $e->getMessage(); 
	}


?>