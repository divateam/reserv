<?php
include("conn.php");
session_start();
$room_id = $_POST["room_id"];
$date_reserv = $_POST["date_reserv"];
$starttime = $_POST["starttime"];
$hourtime = $_POST["hourtime"];
$strQuery = "SELECT "
		."a.reserv_id, "
		."a.username, "
		."a.room_id, "
		."a.reserv_start, "
		."a.reserv_end "
		."FROM "
		."reserv AS a "
		."WHERE "
		."a.reserv_start BETWEEN '".$date_reserv." ".$starttime."' AND DATE_ADD('".$date_reserv." ".$starttime."',INTERVAL ".$hourtime." hour) or "
		."a.reserv_end BETWEEN '".$date_reserv." ".$starttime."' AND DATE_ADD('".$date_reserv." ".$starttime."',INTERVAL ".$hourtime." hour) AND "
		."room_id = '".$room_id."'";
$sqlQuery = mysql_query($strQuery);
if($result = mysql_fetch_array($sqlQuery)){
	//Room is booking
	session_start();
	$_SESSION["reservStatus"] = "failed";
	header("location:reserv-room.php");
}else{
	//Room not is booking
	$strQuery = "insert into reserv (username,room_id,reserv_start,reserv_end) VALUES ('".$_SESSION["username"]."','".$room_id."','".$date_reserv." ".$starttime."',DATE_ADD('".$date_reserv." ".$starttime."',INTERVAL ".$hourtime." HOUR))";
	$sqlQuery = mysql_query($strQuery);
}
mysql_close();
?>