<?php

	$host = "localhost" ;
	$username = "root";
	$password = "";

	$db = "bookstore";

	$connect = mysqli_connect($host, $username,$password,$db);

	if(!$connect){
		echo "Cannot connect to database";
	}



 ?>