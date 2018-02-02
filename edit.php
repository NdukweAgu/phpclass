<?php

$id = $_GET['id'];

include('connect.php');

$query = mysqli_query($connect, "SELECT * FROM books WHERE id='$id'") or die("cannot read row".mysqli_error());

?>
<html>
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD System</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

	<div class="container" style="padding-top: 20px; padding-bottom: 20px;">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3>Edit Book</h3>
				</div>
				<div class="panel-body">
					<form action="update.php" method="post">
						<?php
							while($row = mysqli_fetch_array($query)){
						?>
						<div class="form-group">
							<input type="text" name="title" placeholder="Book Title" class="form-control" value="<?php echo $row['title'] ?>">
						</div>
						<div class="form-group">
							<input type="text" name="author" placeholder="Book Author" class="form-control" value="<?php echo $row['author'] ?>">
						</div>
						<div class="form-group">
							<textarea name="description"  rows="5" placeholder="Book Description" class="form-control"><?php echo $row['description'] ?></textarea>
						</div>
						<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
						<div class="form-group">
							<button type="submit" class="btn btn-info btn-lg btn-block">Update Book</button>
						</div>

						<?php 
						}
						?>


					</form>
				</div>
			</div>
		</div>
		
	</div>
	
</body>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery.js"></script>
</html>