<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Reserv Room</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="icon" href="image/favicon.ico">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.min.css" rel="stylesheet">
<style>
body { padding-top: 70px; }
</style>
</head>
<body>
<?php include 'menu.php';?>
<div class="container">
	<h1 class="text-center">Reserv Room</h1>
	<div class="row"><hr class="bg-brown"/></div>
	<div class="form-group">
		<label for="username" class="col-sm-3 control-label">Room ID:</label>
		<div class="col-sm-7">
			<input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
		</div>
	</div>
	<div class="form-group">
		<label for="username" class="col-sm-3 control-label">Start Time:</label>
		<div class="col-sm-7">
			<input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
		</div>
	</div>
	<div class="form-group">
		<label for="username" class="col-sm-3 control-label">Finish Time:</label>
		<div class="col-sm-7">
			<input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
		</div>
	</div>
</div>

<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>