<?php 

	include('connect.php');

	$title = $_POST['title'];
	$author = $_POST['author'];
	$description = $_POST['description'];

	$query = "INSERT INTO books(title, author, description) VALUES('$title','$author','$description')";

	if(mysqli_query($connect, $query)){

		echo"<script language ='javascript' type ='text/javascript'>window.alert('Book is successfully added!');</script>";
		echo"<script language ='javascript' type='text/javascript'>location.href = 'index.php'</script>";
		exit;
	}
	else{

		echo"<script language ='javascript' type ='text/javascript'>window.alert('Error has occured!');</script>";
		echo"<script language ='javascript' type='text/javascript'>location.href = 'index.php'</script>";
		exit;
	}


	mysqli_close($connect);
	




 ?>