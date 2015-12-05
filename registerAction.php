<?php
include("conn.php");
$username = $_POST["username"];
$password = $_POST["password"];
$name= $_POST["name"];
$lastname= $_POST["lastname"];
$DoB= $_POST["DoB"];
$position= $_POST["position"];
$part= $_POST["part"];
$tel= $_POST["tel"];
$teloftable= $_POST["teloftable"];


$sqlQuery = "insert into employee (username,password,emp_name,emp_lastname,emp_dob,position_id,part,tel,teloftable) 
		values ('".$username."','".$password."','".$name."','".$lastname."','".$DoB."','".$position."','".$part."','".$tel."','".$teloftable."')";

$Query=mysql_query($sqlQuery);
session_start();
if($Query){
	
	$_SESSION["emp_name"] = $name;
	$_SESSION["username"] = $username;
	header("location:dashboard.php");
}else{
	
	$_SESSION["registerStatus"] = "failed";
	header("location:register.php");
}

mysql_close();
?>