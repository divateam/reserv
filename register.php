<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" href="image/favicon.ico">
<title>ระบบจองห้องประชุมregister</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.min.css" rel="stylesheet">
<link href="css/bootstrap-datepicker3.min.css" rel="stylesheet">
<link href="css/sweetalert.css" rel="stylesheet">
</head>
<body>
<div class="container"> 
<form action="registerAction.php" method="post">
	<h1 class="text-center"> Register </h1>
	<div class="row">
		<div class="form-group">
		<label for="username" class="col-sm-3 control-label">Username:</label>
		<div class="col-sm-7">
		<input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
		</div>
		</div>
		
		<div class="form-group">
		<label for="Username" class="col-sm-3 control-label">Password:</label>
		<div class="col-sm-7">
		<input type="Password" class="form-control" name="password" id="password" placeholder="Password" required>
		</div>
		</div>
		
		<div class="form-group">
		<label for="repassword" class="col-sm-3 control-label">Repeat Password:</label>
		<div class="col-sm-7">
		<input type="Password" class="form-control" name="repassword" id="repassword" placeholder="Repeat Password" required>
		</div>
		</div>
		
		<div class="form-group">
		<label for="name" class="col-sm-3 control-label">Name:</label>
		<div class="col-sm-7">
		<input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
		</div>
		</div>
		
		<div class="form-group">
		<label for="lastname" class="col-sm-3 control-label">Lastname:</label>
		<div class="col-sm-7">
		<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Lastname" required>
		</div>
		</div>
		
		<div class="form-group">
		<label for="DoB" class="col-sm-3 control-label">Date of Birth:</label>
		<div class="col-sm-7">
		<input type="text" class="form-control" name="DoB" id="DoB" placeholder="Date of Birth" required>
		</div>
		</div>
		
		<div class="form-group">
		<label for="position" class="col-sm-3 control-label">ตำแหน่ง:</label>
		<div class="col-sm-7">
		<input type="text" class="form-control" name="position" id="position" placeholder="Position" required>
		</div>
		</div>
		
		<div class="form-group">
		<label for="part" class="col-sm-3 control-label">สังกัด/ฝ่าย:</label>
		<div class="col-sm-7">
		<input type="text" class="form-control" name="part" id="part" placeholder="Part" required>
		</div>
		</div>
		
		<div class="form-group">
		<label for="tel" class="col-sm-3 control-label">เบอร์โทรศัพท์:</label>
		<div class="col-sm-7">
		<input type="text" class="form-control" name="tel" id="tel" placeholder="Telephne number" required>
		</div>
		</div>
		<div class="form-group">
		<label for="teloftable" class="col-sm-3 control-label">เบอร์โทรโต๊ะ:</label>
			<div class="col-sm-7">
				<input type="text" class="form-control" name="teloftable" id="teloftable" placeholder="Telephne number of Table" required>
			</div>
		</div>
	</div>
	<div class="row">&nbsp;</div>
	<div class="row text-center">
		<input type="submit" class="btn btn-primary" name="submit" id="submit" value="ยืนยัน">
		<a href="index.php" class="btn btn-danger">ยกเลิก</a>
	</div>
	<input type="hidden" id="registerStatus" value="
	<?php 
		session_start();
		if(isset($_SESSION["registerStatus"]) != null){
		
			$loginstatus = $_SESSION["registerStatus"];
			echo $loginstatus;
			session_unset();
			session_destroy();
		}
	?>
	">
</form>
</div>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<script type="text/javascript">
$(function() {
	if($.trim($("#registerStatus").val()) == "failed"){
			swal("ไม่สามารถสมัครสมาชิกได้", "เกิดข้อผิดพลาดในการสมัครสมาชิกค่ะ กรุณากรอกข้อมูลใหม่ค่ะ", "error");
	}
	$('#DoB').datepicker({
	    format: "yyyy-mm-dd",
	    clearBtn: true,
	    autoclose: true
	});
});

</script>
</body>
</html>
