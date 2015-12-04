<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Menu</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="icon" href="image/favicon.ico">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>
<?php
		include("conn.php");
		session_start();
		if($_SESSION["username"] == null){
			$_SESSION["loginstatus"] = "pleaselogin";
			header("location:login.php");
		}
?>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">
        <img alt="Brand" src="image/logoBrand1.jpg" class="img-responsive" alt="Responsive image">
      </a>
      <a class="navbar-brand" href="index.html">การรถไฟฟ้าแห่งประเทศไทย</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;ห้องประชุม <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><span class="glyphicon glyphicon-edit"></span>&nbsp;จองห้องประชุม</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;แนบเอกสาร</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><span class="glyphicon glyphicon-search"></span>&nbsp;ดูตารางการจอง</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><span class="glyphicon glyphicon-search"></span>&nbsp;ดูรูปห้องประชุม</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><span class="glyphicon glyphicon-search"></span>&nbsp;ดูแผนผังห้องประชุม</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>&nbsp; สมาชิก <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="logoutAction.php"><span class="glyphicon glyphicon-off"></span>&nbsp;ออกจากระบบ</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

.<br/>
.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>

</body>
</html>