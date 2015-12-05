<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MRTA | Calendar</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="icon" href="image/favicon.ico">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.min.css" rel="stylesheet">
<link href="css/fullcalendar.css" rel="stylesheet">
<link href="css/sweetalert.css" rel="stylesheet">
<style>
body { padding-top: 70px; }
</style>

</head>
<body>

<?php include 'menu.php';?>

<div class="container">
	<div id='calendar'></div>
</div>
<input type="hidden" id="updateStatus" value="
	<?php 
		
		if(isset($_SESSION["updateStatus"]) != null){
		
			echo $_SESSION["updateStatus"];
			$_SESSION["updateStatus"] = null;
		}
	?>
">
<input type="hidden" id="deleteStatus" value="
	<?php 
		
		if(isset($_SESSION["deleteStatus"]) != null){
		
			echo $_SESSION["deleteStatus"];
			$_SESSION["deleteStatus"] = null;
		}
	?>
">
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/moment.js"></script>
<script src="js/fullcalendar.js"></script>
<script src="js/sweetalert.min.js"></script>
<script>

	$(document).ready(function() {

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: '2015-12-12',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: {
				url:'fethreserv.php'
			}
		});

		// SweetAlert updateStatus
		if($.trim($("#updateStatus").val()) == "failed"){
			swal("ไม่สามารถอัพเดทได้", "ข้อมูลผิดพลาด ไม่สามารถแก้ไขได้ค่ะ", "error");
		}else if($.trim($("#updateStatus").val()) == "success"){
			swal("อัพเดทข้อมูล", "อัพเดทข้อมูลเรียบร้อยค่ะ", "success");
		}

		// SweetAlert deleteStatus
		if($.trim($("#deleteStatus").val()) == "failed"){
			swal("ลบข้อมูล", "ข้อมูลผิดพลาด ไม่สามารถลบข้อมูลได้ค่ะ", "error");
		}else if($.trim($("#deleteStatus").val()) == "success"){
			swal("ลบข้อมูล", "ลบข้อมูลได้เรียบร้อยค่ะ", "success");
		}
		
	});

</script>
</body>
</html>
