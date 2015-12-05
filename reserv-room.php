<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MRTA | Reserv Room</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="icon" href="image/favicon.ico">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.min.css" rel="stylesheet">
<link href="css/bootstrap-datepicker3.min.css" rel="stylesheet">
<link href="css/sweetalert.css" rel="stylesheet">
<style>
body { padding-top: 70px; }
</style>
</head>
<body>
<?php include 'menu.php';?>
<div class="container">
	<h1 class="text-center">Reserv Room</h1>
	<div class="row"><hr class="bg-brown"/></div>
	<form method="post" action="reserv-roomAction.php">
	<div class="row">&nbsp;</div>
		<div class="form-group">
			<label for="room_id" class="col-sm-3 control-label">จองห้องประชุม</label>
			<div class="col-sm-7">
			<select class="form-control" name="room_id" id="room_id" required>
			  <option value="">กรุณาเลือกห้องที่ต้องการจองด้วยค่ะ</option>
			  <?php 
			  	$strQuery ="SELECT "
				."a.room_id,"
				."a.room_name,"
				."a.roomtype_id,"
				."b.roomtype_capacity,"
				."b.roomtype_name "
				."FROM "
				."room AS a "
				."INNER JOIN roomtype AS b ON b.roomtype_id = a.roomtype_id "
				."ORDER BY "
				."b.roomtype_capacity ASC, "
				."a.room_id ASC";
			  	
			  	$sqlQuery = mysql_query($strQuery);
			  	while($result = mysql_fetch_array($sqlQuery)){
			  ?>
			  	<option value="<?=$result["room_id"] ?>"><?=$result["room_name"] ?> - <?=$result["roomtype_name"] ?> - รองรับ <?=$result["roomtype_capacity"] ?> คน</option>
			  <?php 
			  	}
			  	mysql_close();
			  ?>
			</select>
			</div>
		</div>
		<div class="row"><hr class="bg-brown"/></div>
		
		<div class="form-group">
			<label for="date_reserv" class="col-sm-3 control-label">วันที่จอง </label>
			<div class="col-sm-7">
				<input type="text" class="form-control" name="date_reserv" id="date_reserv" placeholder="Date Reserv" required>
			</div>
		</div>
		<div class="row"><hr class="bg-brown"/></div>
		
		<div class="form-group">
			<label for="starttime" class="col-sm-3 control-label">เริ่มจองเวลา </label>
			<div class="col-sm-7">
				<select class="form-control" name="starttime" required>
					<option value="">กรุณาเลือกเวลาที่ต้องการเริ่มจองค่ะ</option>
					<option value="07:00">07:00 น.</option>
					<option value="08:00">08:00 น.</option>
					<option value="09:00">09:00 น.</option>
					<option value="10:00">10:00 น.</option>
					<option value="11:00">11:00 น.</option>
					<option value="12:00">12:00 น.</option>
					<option value="13:00">13:00 น.</option>
					<option value="14:00">14:00 น.</option>
					<option value="15:00">15:00 น.</option>
					<option value="16:00">16:00 น.</option>
					<option value="17:00">17:00 น.</option>
					<option value="18:00">18:00 น.</option>
				</select>
			</div>
		</div>
		<div class="row"><hr class="bg-brown"/></div>
		
		<div class="form-group">
			<label for="hourtime" class="col-sm-3 control-label">ระยะเวลาในการจอง </label>
			<div class="col-sm-7">
				<input type="text" class="form-control" name="hourtime" id="hourtime" placeholder="ระยะเวลาในการจอง (นับเป็นชั่วโมง)" required>
			</div>
		</div>
		<div class="row"><hr class="bg-brown"/></div>
		
		<div class="form-group">
			<label for="description" class="col-sm-3 control-label">หัวข้อการจอง </label>
			<div class="col-sm-7">
				<input type="text" class="form-control" name="description" id="description" placeholder="หัวข้อการจอง" required>
			</div>
		</div>
		<div class="row"><hr class="bg-brown"/></div>
		
		<div class="col-md-4"></div>
		<div class="col-md-4"><button type="submit" class="btn btn-primary">ยินยันการจอง</button> &nbsp; <a href="dashboard.php" class="btn btn-danger">ยกเลิก</a></div>
		<div class="col-md-4"></div>
		
	</form>
	<input type="hidden" name="reservStatus" id="reservStatus" value="
	<?php 
	if(isset($_SESSION["reservStatus"]) != null){
	
		$reservStatus = $_SESSION["reservStatus"];
		echo $reservStatus;
		$_SESSION["reservStatus"] = null;
	}
	?>
	">
</div>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<script type="text/javascript">
$(function() {
	$('#date_reserv').datepicker({
	    format: "yyyy-mm-dd",
	    clearBtn: true,
	    autoclose: true,
	    todayBtn: "linked"
	});

	//sweet alert Start
	if($.trim($("#reservStatus").val()) == "failed"){
		swal("ไม่สามารถจองได้", "ห้องและเวลาที่ท่านเลือกมีการจองไว้แล้วค่ะ", "error");
	}

	
	//sweet alert End $('#room_id').val("5");
	
});

</script>
</body>
</html>