<?php 
	include('connect.php');
	$insert ="SELECT * FROM books";
	$display = mysqli_query($connect, $insert) or die("cannot select record".mysqli_error());

?>

<html>
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD System</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body style="background:white;">

	<div class="container" style="padding-top: 20px; padding-bottom: 20px;">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3>CRUD System with Git Demo</h3>
				</div>
				<div class="panel-body">
					<form action="insert.php" method="post">
						<div class="form-group">
							<input type="text" name="title" placeholder="Book Title" class="form-control">
						</div>
						<div class="form-group">
							<input type="text" name="author" placeholder="Book Author" class="form-control">
						</div>
						<div class="form-group">
							<textarea name="description"  rows="5" placeholder="Book Description" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-info btn-lg btn-block">Add Book</button>
						</div>

					</form>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-md-offset-3">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>Number</th>
						<th>Title</th>
						<th>Author</th>
						<th>Description</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<thead>
					<tr>
						<th>Number</th>
						<th>Title</th>
						<th>Author</th>
						<th>Description</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
					$c = 0;
					while($row = mysqli_fetch_array($display)) {
					 ?>
					
					<tr>
						<td><?php echo $c = $c + 1; ?></td>
						<td><?php echo $row['title']?></td>
						<td><?php echo $row['author']?></td>
						<td><?php echo $row['description']?></td>
						<td><a href="edit.php?id=<?php echo $row['id'] ?>" title="Edit <?php echo $row['title']?> "><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span></a></td>
						<td><a href="delete.php?id=<?php echo $row['id'] ?>" title="Delete <?php echo $row['title']?> "><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
					</tr>

					<?php } ?>
					
					
				</tbody>
			</table>
		</div>
	</div>
	
</body>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery.js"></script>
</html>