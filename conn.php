<?php

  $objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
  $objDB = mysql_select_db("mrta");
  mysql_query("SET NAMES UTF8"); 
  ?>