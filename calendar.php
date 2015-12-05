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

<style>
body { padding-top: 70px; }
</style>

</head>
<body>

<?php include 'menu.php';?>

<div class="container">
	<div id='calendar'></div>
</div>

<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/moment.js"></script>
<script src="js/fullcalendar.js"></script>

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
		
	});

</script>
</body>
</html>
