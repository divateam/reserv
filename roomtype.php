<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MRTA | Roomtype</title>
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
	<?php 
		$strQuery = "SELECT room.room_id,room_picture.picture_path,room.room_name,roomtype.roomtype_id,roomtype.roomtype_name,roomtype.roomtype_capacity "
		."FROM "
		."room "
		."INNER JOIN roomtype ON room.roomtype_id = roomtype.roomtype_id "
		."INNER JOIN room_picture ON room_picture.room_id = room.room_id "
		."GROUP BY room.room_id order by roomtype.roomtype_capacity";
		$sqlQuery = mysql_query($strQuery);
		while ($result = mysql_fetch_array($sqlQuery)){
	?>
		<div class="col-md-3">
		<a href="gallery.php?room_id=<?=$result["room_id"] ?>&room_name=<?=$result["room_name"] ?>" class="thumbnail no-link"  title="More Click">
			<div  style="width: 100% ;height: 200px; overflow: hidden;" >
				<img src="<?=$result["picture_path"] ?>" style="width: 100%"/>
			</div>
			<h4 class=" text-center text-info ">ห้องประชุม <?=$result["room_name"] ?></h4>	
			<p style="max-height: 40px;overflow: hidden" class="text-center">Capacity : <?=$result["roomtype_capacity"] ?> คน</p>				
		</a>
	</div>
	<?php 
	
		}
	?>
	
</div>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>