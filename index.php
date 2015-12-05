<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>MRTA</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="icon" href="image/favicon.ico">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.min.css" rel="stylesheet">
<link href="css/swiper.css" rel="stylesheet">
<link href="css/StyleSwiper.css" rel="stylesheet">
<link href="css/uikit.gradient.css" rel="stylesheet">
<!-- Place either at the bottom in the <head> of your page or inside your CSS -->
</head>
<body>

<div class="container">
<!-- Navbar Start -->
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="index.php">MRTA</a>
		    </div>
		    <div id="navbar" class="navbar-collapse collapse">
		      <ul class="nav navbar-nav ">
		        <li><a href="index.php">Home</a></li>
		        <li><a href="index.php">Contact Us</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Member <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="login.php">Login</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="register.php">Register</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!--/.nav-collapse -->
		</div><!--/.container-fluid -->
	</nav>
<!-- Navbar End -->
<!-- Swiper -->
	<div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
            <figure class="uk-overlay uk-overlay-hover">
			    <img class="uk-overlay-scale" src="image/Bangkok_Skytrain_2011.jpg" width="100%" height="100%">
			    <div class="uk-overlay-panel uk-flex uk-flex-center uk-flex-middle uk-text-center uk-overlay-background">dwfqfqfwqfqwfq</div>
			</figure>
			</div>
            <div class="swiper-slide">
            <figure class="uk-overlay uk-overlay-hover">
			    <img class="uk-overlay-scale" src="image/34.png" width="100%" height="100%">
			    <div class="uk-overlay-panel uk-flex uk-flex-center uk-flex-middle uk-text-center uk-overlay-background">dwfqfqfwqfqwfq</div>
			</figure>
			</div>
            <div class="swiper-slide">
            <figure class="uk-overlay uk-overlay-hover">
			    <img class="uk-overlay-scale" src="image/maxresdefault.jpg" width="100%" height="100%">
			    <div class="uk-overlay-panel uk-flex uk-flex-center uk-flex-middle uk-text-center uk-overlay-background">dwfqfqfwqfqwfq</div>
			</figure>
			</div>
			<div class="swiper-slide">
            <figure class="uk-overlay uk-overlay-hover">
			    <img class="uk-overlay-scale" src="image/Bangkok_Skytrain_06.jpg" width="100%" height="100%">
			    <div class="uk-overlay-panel uk-flex uk-flex-center uk-flex-middle uk-text-center uk-overlay-background">dwfqfqfwqfqwfq</div>
			</figure>
			</div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
<!-- Swiper END -->
<div class="row">&nbsp;</div>

<div class="row text-center">
	<h1>ประวัติ</h1>
</div>
  <div class="row">&nbsp;</div>
  <div class="row">
  	<div class="col-md-6 col-lg-6">
  		<img src="image/BTS01.jpg" class="img-responsive img-thumbnail">
  	</div>
   <div class="col-lg-6 text-center">
	    <p>ปี พ.ศ. 2514 รัฐบาลไทยได้รับความช่วยเหลือจากรัฐบาลเยอรมันส่งคณะผู้เชี่ยวชาญมาทำการศึกษา สำรวจ และวางแผนแม่บทสำหรับการจราจรและขนส่งในกรุงเทพมหานคร ซึ่งได้เสนอแนะให้มีระบบรถขนส่งมวลชนแบบเร็ว (Mass Rapid Transit System) เพื่อแก้ไขปัญหาการเดินทางและการจราจรในกรุงเทพมหานคร จึงได้มี “ประกาศของคณะปฏิวัติ ฉบับที่ 290 ลงวันที่ 27 พฤศจิกายน พุทธศักราช 2515” จัดตั้ง “การทางพิเศษแห่งประเทศไทย” ขึ้น เพื่อจัดสร้าง “ทางพิเศษ” ซึ่งประกอบด้วย
		ระบบทางด่วน (Express Way)
		ระบบรถไฟฟ้าขนส่งมวลชน (Mass Rapid Transit System)
		การทางพิเศษแห่งประเทศไทย
		</p>
	</div>
</div>
   
</div>
  <!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.smooth-scroll.js"></script>
<script src="js/swiper.js"></script>
    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false,
        loop:true
    });
    </script>
    <!-- Initialize Swiper -->
</body>
</html>