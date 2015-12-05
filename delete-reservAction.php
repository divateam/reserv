<?php
include("conn.php");
$strQuery = "delete from reserv where reserv_id = '".$_GET["reserv_id"]."'";
mysql_query($strQuery);
session_start();
if(mysql_affected_rows() > 0){
	$_SESSION["deleteStatus"] = "success";
}else {
	$_SESSION["deleteStatus"] = "failed";
}

header("location:calendar.php");
?>