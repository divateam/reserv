<?php
include("conn.php");
$strQuery = "update reserv set room_id = '".$_POST["room_id"]."' ,reserv_start = '".$_POST["date_reserv"]." ".$_POST["starttime"]."'"
		.",reserv_end = DATE_ADD('".$_POST["date_reserv"]." ".$_POST["starttime"]."',INTERVAL ".$_POST["hourtime"]." HOUR),reserv_description='".$_POST["description"]."' where reserv_id = '".$_POST["reserv_id"]."'";
mysql_query($strQuery);
session_start();
if(mysql_affected_rows() > 0 ){
	$_SESSION["updateStatus"] = "success";
}else{
	$_SESSION["updateStatus"] = "failed";
}
header("location:calendar.php");
?>