<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MRTA | Room Gallery</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="icon" href="image/favicon.ico">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.min.css" rel="stylesheet">
<link href="css/lightgallery.css" rel="stylesheet">
<link href="css/swiper.css" rel="stylesheet">
<link href="css/StyleSwiper.css" rel="stylesheet">
<link href="css/uikit.gradient.css" rel="stylesheet">
<style>
body { padding-top: 70px; }
</style>
</head>
<body>

<?php include 'menu.php';?>
<?php if(!$_GET["room_id"]){
		header("location:calendar.php");
	}
	if(!$_GET["room_name"]){
		header("location:calendar.php");
	}
?>
<div class="container">
	<h1 class="text-center"> Gallery ห้อง <?=$_GET["room_name"]?></h1>
	<div class="swiper-container">
        <div class="swiper-wrapper">
<?php 
	if(!$_GET["room_id"]){
		header("location:calendar.php");
	}
	$strQuery = "SELECT room.room_id,room.room_name,room.roomtype_id,room_picture.picture_path "
		."FROM "
		."room "
		."INNER JOIN room_picture ON room_picture.room_id = room.room_id "
		."where room.room_id = '".$_GET["room_id"]."'";
	
	$sqlQuery = mysql_query($strQuery);
	while ($result = mysql_fetch_array($sqlQuery) ){
?>
			
				<div class="swiper-slide">
				
		            <figure class="uk-overlay uk-overlay-hover">
					    <img class="uk-overlay-scale" src="<?=$result["picture_path"] ?>" width="100%" height="100%">
					</figure>
				
				</div>
<?php
	}
?>
	</div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    
</div>
</div>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/lightgallery.js"></script>

<script src="js/jquery.mousewheel.js"></script>
<script src="js/lg-thumbnail.js"></script>
<script src="js/lg-fullscreen.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.smooth-scroll.js"></script>
<script src="js/swiper.js"></script>
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
<script type="text/javascript">
    $(function() {
        $("#lightgallery").lightGallery(); 
    });
</script>

</body>
</html>