<?php

include('connect.php');

$id = $_GET['id'];

$query = mysqli_query($connect,"DELETE FROM books WHERE id='$id'") or die("cannot delete".mysqli_error());

if($query){
	echo"<script language ='javascript' type ='text/javascript'>window.alert('Book is successfully deleted!');</script>";
		echo"<script language ='javascript' type='text/javascript'>location.href = 'index.php'</script>";
		exit;
}else{
	echo"<script language ='javascript' type ='text/javascript'>window.alert('error has occurred');</script>";
		echo"<script language ='javascript' type='text/javascript'>location.href = 'index.php'</script>";
		exit;
}

mysqli_close($connect);
?>