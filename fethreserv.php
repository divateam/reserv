<?php
include("conn.php");
$strQuery = "select * from reserv";
$sqlQuery = mysql_query($strQuery);

$reserv_idArray = array();
$usernameArray = array();
$room_idArray = array();
$reserv_startArray = array();
$reserv_endArray = array();
$reserv_descriptionArray = array();

$arr = array();
while ($result = mysql_fetch_array($sqlQuery)){
	$arr[] = array(
			"title" => $result["reserv_description"],
			"start" => $result["reserv_start"],
			"end" => $result["reserv_end"],
			"url" => "update-reserv.php?reserv_id=".$result["reserv_id"]
	);
}

echo json_encode($arr);

?>