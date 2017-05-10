<!DOCTYPE html>
<html>
<head>
<title>Cửa hàng chim cảnh</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Ornithology a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- css files -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css">
<link href="list-css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="list-css/work.css" rel="stylesheet" type="text/css">
<link href="list-css/banner.css" rel="stylesheet" type="text/css">	
<link href="list-css/style.css" rel="stylesheet" type="text/css">	
<!-- /css files -->	
<!-- font files -->	
<link href='//fonts.googleapis.com/css?family=Orbitron:400,500,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<!-- /font files -->	
<!-- js files -->
<!-- /js files -->
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="."><h1>Trang chủ</h1></a>
        </div>
    </div>
</nav>
<!-- === Slide 2 === -->
<div class="slide story" id="slide-2">
<section class="our-work slideanim">
	<h3 class="text-center slideanim">Cửa hàng chim cảnh</h3>
	<div class="container">
		<hr>
	</div>
	<p class="text-center slideanim">Cùng nhau ngắm những chú chim đến từ khắp vùng lãnh thổ Việt Nam</p>
	<div class="container-fluid">
		<div class="demo-wrapper">
			<ul class="portfolio-items">
            <?php
			foreach($showroomss as $show)
			{
            ?>
				<li class="item">
					<figure>
						<div class="view"> <img src="images/255x291/<?php echo $show->hinh_anh  ?>" /> </div>
						<figcaption>
							<p><span><a href="#0"><?php echo $show->dia_chi  ?>.</a></span></p>
							<p><span style="color:#F00"><?php echo $show->dien_thoai  ?></span></p>
						</figcaption>
					</figure>
					<div class="date"><a href="contact.php"><?php echo "Chi tiết" ?></a></div>
				</li>
                <?php
				}
				?>
			</ul>
		</div>
	</div><!-- /container -->
</section>	
</div><!-- /slide2 -->
</body>
	<!-- SCRIPTS -->
	<script src="list-js/jquery-1.10.2.min.js"></script>
	<script src="list-js/bootstrap.min.js"></script>
	<script src="list-js/SmoothScroll.min.js"></script>
	<!-- js for banner -->
	<script src='list-js/classie.js'></script>

	<!-- /js for banner -->
	<!-- js for top of work section -->
	 <script src="list-js/index.js"></script>
	<!-- /js for top of work section -->
	<!-- js for works section -->

	<script src="list-js/jquery.mousewheel.js"></script> 
	<script src="list-js/work.js"></script>
	<!-- /js for works section -->
	<!-- js for footer pics -->
	<!-- js for footer pics -->
	<!-- js for gallery -->

	<!-- js for gallery -->
<!-- js for smooth navigation -->
	<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, section.footer a").on('click', function(event) {

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 900, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
})
</script>
<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
<!-- /js for smooth navigation -->	
		<!-- js for pricing table -->
		<script src="../../list-js/jquery.magnific-popup.js" type="text/javascript"></script>
		<script>
			$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
			});
			});
		</script>
		<!-- /js for pricing table -->
</html>