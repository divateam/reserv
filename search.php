<html>
	<head>
	<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
	</head>
	<body>
	<form name="frmSearch" method="get" action="<?=$_SERVER['SCRIPT_NAME'];?>">
	<table width="599" border="1">
	<tr>
	<th>Keyword
	<input name="txtKeyword" type="text" id="txtKeyword" value="<?=$_GET["txtKeyword"];?>">
	<input type="submit" value="Search"></th>
	</tr>
	</table>
	</form>
	<?
	if($_GET["txtKeyword"] != "")
	{
	$objConnect = mysql_connect("localhost","root","1234") or die("Error 
	Connect to Database");
	$objDB = mysql_select_db("mrta");
	mysql_query("SET NAMES UTF8");
	// Search By Name or Email
	$strSQL = "SELECT * FROM cus 
	WHERE (name LIKE'%".$_GET["txtKeyword"]."%' or lname LIKE '%".$_GET["txtKeyword"]."%' )";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	?>
	<table width="600" border="1">	
	<tr>
	<th width="91"> <div align="center">id</div></th>
	<th width="98"> <div align="center">name</div></th>
	<th width="98"> <div align="center">lname</div></th>
	<th width="150"> <div align="center">position</div></th>
	<th width="150"> <div align="center">department</div></th>
	</tr>
	<?
	while($objResult = mysql_fetch_array($objQuery))
	{
	?>
	<tr>
	<td><div align="center"><?=$objResult["id"];?></div></td>
	<td><?=$objResult["name"];?></td>
	<td><?=$objResult["lname"];?></td>	
	<td align="right"><?=$objResult["position"];?></td>
	<td align="right"><?=$objResult["department"];?></td>
	</tr>
	<?
	}
	?>
	</table>
	<?
	mysql_close($objConnect);
	}
	?>
	</body>
	</html> 