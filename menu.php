<?php
		include("conn.php");
		session_start();
		$emp_name = null;
		if($_SESSION["username"] == null){
			$_SESSION["loginstatus"] = "pleaselogin";
			header("location:login.php");
		}else{
			$emp_name = $_SESSION["emp_name"];
			
		}
?>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">
        <img alt="Brand" src="image/logoBrand1.jpg" class="img-responsive" alt="Responsive image">
      </a>
      <a class="navbar-brand" href="index.php">การรถไฟฟ้าแห่งประเทศไทย</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;ห้องประชุม <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="reserv-room.php"><span class="glyphicon glyphicon-edit"></span>&nbsp;จองห้องประชุม</a></li>
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
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>&nbsp;<?=$emp_name ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="logoutAction.php"><span class="glyphicon glyphicon-off"></span>&nbsp;ออกจากระบบ</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>