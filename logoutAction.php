<?php
session_start();
$_SESSION["loginstatus"] = "logout";
header("location:login.php");
?>