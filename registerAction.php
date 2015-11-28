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
		

?>
<br/>
<?php

$Query=mysql_query($sqlQuery);
if($Query){
	echo "Insert Success";
}else{
	echo "Insert Failed";
}

mysql_close();
?>