<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ระบบจองห้องประชุมregister</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.min.css" rel="stylesheet">
<link href="css/bootstrap-datepicker3.min.css" rel="stylesheet">
</head>

<body>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<table width="971" height="852" border="0" align="center">
  <tbody>
    <tr>
      <td height="220" colspan="3"><img src="image/logo.jpg" width="251" height="251" alt=""/><img src="image/head.jpg" width="712" height="251" alt=""/></td>
    </tr>
    <tr>
      <td height="88" colspan="3"><table width="964" border="0">
        <tbody>
          <tr align="right" valign="top">
            <td width="185" height="82" align="center" valign="top"><a href="index.html"><input name="imageField" type="image" id="imageField" src="image/back-button.png" width="185" height="80"></td>
            <td width="185" align="center" valign="top"><input name="imageField2" type="image" id="imageField2" src="image/pic02.png" width="185" height="80"></td>
            <td width="185" align="center" valign="top"><input name="imageField3" type="image" id="imageField3" src="image/pic03.png" width="185" height="80"></td>
            <td width="185" align="center" valign="top"><a href="register.php"><input name="imageField4" type="image" id="imageField4" src="image/pic04.png" width="185" height="80"></td>
            <td width="185" align="center" valign="top"><a href="Login.php"><input name="imageField5" type="image" id="imageField5" src="image/pic05.png" width="185" height="80"></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td width="193" height="70"><input type="image" name="imageField10" id="imageField10" src="image/img10.png"></td>
      <td colspan="2" align="center" valign="middle" bgcolor="#BDD5F6"><p>
          <p>สมัครสมาชิก        </p>
        </td>
    </tr>
    <form action="registerAction.php" method="post">
    <tr>
      <td height="70"><input type="image" name="imageField6" id="imageField6" src="image/img11.png"></td>
      <td width="378" align="center" valign="middle" bgcolor="#BDD5F6">
	      <div class="form-group">
	      	<label for="username" class="col-sm-3 control-label">Username:</label>
		    <div class="col-sm-7">
		      <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
		    </div>
	      </div>
      </td>
      
      <td width="386" align="center" valign="middle" bgcolor="#BDD5F6">
      	<div class="form-group">
	      	<label for="Username" class="col-sm-3 control-label">Password:</label>
		    <div class="col-sm-7">
		      <input type="Password" class="form-control" name="password" id="password" placeholder="Password" required>
		    </div>
	   	</div>
      </td>
    </tr>
    <tr>
      <td height="70"><input type="image" name="imageField7" id="imageField7" src="image/img02.png"></td>
      <td width="378" align="center" valign="middle" bgcolor="#BDD5F6">&nbsp;</td>
      <td width="386" align="center" valign="middle" bgcolor="#BDD5F6">
      	<div class="form-group">
	      	<label for="repassword" class="col-sm-3 control-label">Repeat Password:</label>
		    <div class="col-sm-7">
		      <input type="Password" class="form-control" name="repassword" id="repassword" placeholder="Repeat Password" required>
		    </div>
	   	</div>
      </td>
    </tr>
    <tr>
      <td height="70"><input type="image" name="imageField8" id="imageField8" src="image/img03.png"></td>
      <td width="378" align="center" valign="middle" bgcolor="#BDD5F6">
      	<div class="form-group">
	      	<label for="name" class="col-sm-3 control-label">Name:</label>
		    <div class="col-sm-7">
		      <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
		    </div>
	   	</div>
      </td>
      <td width="386" align="center" valign="middle" bgcolor="#BDD5F6">
      	<div class="form-group">
	      	<label for="lastname" class="col-sm-3 control-label">Lastname:</label>
		    <div class="col-sm-7">
		      <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Lastname" required>
		    </div>
	   	</div>
      </td>
    </tr>
    <tr>
      <td height="70"><input type="image" name="imageField9" id="imageField9" src="image/img04.png"></td>
      <td colspan="2" align="center" valign="middle" bgcolor="#BDD5F6">
      <div class="form-group">
	      	<label for="DoB" class="col-sm-3 control-label">Date of Birth:</label>
		    <div class="col-sm-7">
		      <input type="text" class="form-control" name="DoB" id="DoB" placeholder="Date of Birth" required>
		    </div>
	   	</div>
        </td>
    </tr>
    <tr>
      <td height="70"><input type="image" name="imageField11" id="imageField11" src="image/img06.png"></td>
      <td width="378" align="center" valign="middle" bgcolor="#BDD5F6">
      	<div class="form-group">
	      	<label for="position" class="col-sm-3 control-label">ตำแหน่ง:</label>
		    <div class="col-sm-7">
		      <input type="text" class="form-control" name="position" id="position" placeholder="Position" required>
		    </div>
	   	</div>
      </td>
      <td width="386" align="center" valign="middle" bgcolor="#BDD5F6">
      	<div class="form-group">
	      	<label for="part" class="col-sm-3 control-label">สังกัด/ฝ่าย:</label>
		    <div class="col-sm-7">
		      <input type="text" class="form-control" name="part" id="part" placeholder="Part" required>
		    </div>
	   	</div>
      </td>
    </tr>
    <tr>
      <td height="70"><input type="image" name="imageField12" id="imageField12" src="image/img07.png"></td>
      <td width="378" align="center" valign="middle" bgcolor="#BDD5F6">
      	<div class="form-group">
	      	<label for="tel" class="col-sm-3 control-label">เบอร์โทรศัพท์:</label>
		    <div class="col-sm-7">
		      <input type="text" class="form-control" name="tel" id="tel" placeholder="Telephne number" required>
		    </div>
	   	</div>
      </td>
      <td width="386" align="center" valign="middle" bgcolor="#BDD5F6">
      	<div class="form-group">
	      	<label for="teloftable" class="col-sm-3 control-label">เบอร์โทรโต๊ะ:</label>
		    <div class="col-sm-7">
		      <input type="text" class="form-control" name="teloftable" id="teloftable" placeholder="Telephne number of Table" required>
		    </div>
	   	</div>
      </td>
      
    </tr>
    <tr>
      <td height="70"><input type="image" name="imageField13" id="imageField13" src="image/img08.png"></td>
      <td width="378" align="center" valign="middle" bgcolor="#BDD5F6"><input name="submit" class="btn btn-primary" type="submit" id="submit" value="ยืนยัน"></td>
      <td width="386" align="center" valign="middle" bgcolor="#BDD5F6"><input type="button" class="btn btn-danger" name="button" id="button" value="ยกเลิก"></td>
    </tr>
   	</form>
    <tr>
      <td height="68" colspan="3" align="center" valign="middle">
        <p>Copyright © 2015 MRTA All rights reserved.<br>
          57018589 นายวงศการ ชัยชนะ<br>
          นส.ยุพา อารีเอื้อ</p>
      </td>
    </tr>
  </tbody>
</table>

<script type="text/javascript">
$('#DoB').datepicker({
    format: "yyyy-mm-dd",
    clearBtn: true,
    autoclose: true
});
</script>
</body>
</html>
