<html>
<head>
<meta charset="utf-8">
<title>MRTA | Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="icon" href="image/favicon.ico">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.min.css" rel="stylesheet">
<link href="css/signin.css" rel="stylesheet">
<link href="css/sweetalert.css" rel="stylesheet">
</head>
<body>

	<div class="container">
      <form class="form-signin" action="loginAction.php" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required="" autofocus="">
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <input type="hidden" id="loginstatus" name="loginstatus" value="
        <?php 
        	session_start();
        	if(isset($_SESSION["loginstatus"]) != null){
        		
        			$loginstatus = $_SESSION["loginstatus"];
        			echo $loginstatus;
        			session_unset();
        			session_destroy();
        	}
        ?>
        ">
      </form>
    </div>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<script type="text/javascript">
$(function() {
	if($.trim($("#loginstatus").val()) == "fail"){
		
			swal("ไม่สามารถเข้าสู่ระบบได้", "Username หรือ Password ของคุณผิดพลาด กรุณากรอกใหม่ค่ะ", "error");
	}else if($.trim($("#loginstatus").val()) == "logout"){
			swal("ออกจากระบบ", "ออกจากระบบเสร็จสิ้น", "success");
	}else if($.trim($("#loginstatus").val()) == "pleaselogin"){
			swal("กรุณาเข้าสู่ระบบ", "กรุณาเข้าสู่ระบบก่อนเข้าใช้งานด้วยค่ะ", "info");
	}
});
</script>
</body>
</html>
