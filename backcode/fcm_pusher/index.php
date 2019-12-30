<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-3">
			<ul class="nav nav-pills flex-column">
				<a class="nav-link active" href="#">Active</a>
				<a class="nav-link" href="set-data.php">Set Data</a>
				<a class="nav-link" href="get-data.php">Get Data</a>
				<a class="nav-link disabled" href="#">Disabled</a>
			</ul>
		</div>
		<div class="col-md-9">
			<form method="post" action="storing-data.php">
				<div class="form-group">
					<h3>Project Form</h3>
					<label>Name</label>
					<input type="text" name="name" class="form-control">


				</div>
				<div class="form-group">
					<input class="btn btn-dark" type="submit" name="submit" >
				</div>
			</form>
		</div>
	</div>
</div>

</body>
</html>
