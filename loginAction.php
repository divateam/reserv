<html>
<head>
<meta charset="utf-8">
<title>Test Design</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<div class="row">
  <div class="col-md-4">
  	Detail
  </div>
  <div class="col-md-4"></div>
  <div class="col-md-4"></div> 
</div>
<div class="row">
  <div class="col-md-4">
  	
	<?php
		include("conn.php");
		$usernameLogin = $_POST["username"];
		$passwordLog= $_POST["password"];
		$repasswordLogin = $_POST["repassword"];
		
		$sqlQuery = "select * from employee where username = '".$usernameLogin."' and password = '".$passwordLog."'";
		
		$Query=mysql_query($sqlQuery);
		
		if($result = mysql_fetch_array($Query)){
			
			$_SESSION["emp_name"] = $result["emp_name"];
			$_SESSION["username"] = $result["username"];
		}
		
	?>
    <p>ยินดีต้อนรับ</p><br/>
    <p>ชื่อ : <?php echo $result["emp_name"]; ?></p><br/>
    <p>นามสกุล : <?php echo $result["emp_lastname"]; ?></p><br/>
	<input type="button" onclick="location.href='index.html';" value="Go to index" />
  </div>
  <div class="col-md-4">
  	
  </div>
  <div class="col-md-4"></div>
</div>

</body>
</html>

