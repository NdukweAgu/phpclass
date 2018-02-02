<?php

include('connect.php');
$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];

$query = mysqli_query($connect, "UPDATE books SET title='$title', author='$author', description='$description' WHERE id='$id'") or die("cannot update".mysqli_error());

	if($query){

		echo"<script language ='javascript' type ='text/javascript'>window.alert('Book is successfully updated!');</script>";
		header("Location:index.php");

	}else{
		echo"<script language ='javascript' type ='text/javascript'>window.alert('Error has occured');</script>";
	}

mysqli_close($connect);
?>