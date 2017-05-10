<?php
@session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Cửa hàng chim cảnh</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pignose css -->
<link href="css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/jCart.js"></script>
<link rel="stylesheet" type="text/css" href="css/cart.css">
<!-- //js -->
<!-- single -->
<script src="js/imagezoom.js"></script>
<script src="js/jquery.flexslider.js"></script>
<!-- single -->
<!-- cart -->
	<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->

<script src="js/jquery.easing.min.js"></script>






<!-- news-css -->
<link rel="stylesheet" href="news-css/news.css" type="text/css" media="all" />
<!-- //news-css -->
<!-- list-css -->
<link rel="stylesheet" href="list-css/list.css" type="text/css" media="all" />
<!-- //list-css -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<!-- js -->




<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style --> 
<link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" /> <!-- banner slider --> 
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  

<script src="js/owl.carousel.js"></script>  
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({ 
	  autoPlay: 3000, //Set AutoPlay to 3 seconds 
	  items :4,
	  itemsDesktop : [640,5],
	  itemsDesktopSmall : [480,2],
	  navigation : true
 
	}); 
}); 
</script>
<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        $('.header-two').scrollToFixed();  
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header-two').outerHeight(true) + 10, 
                zIndex: 999
            });
        });
    });
</script>
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->






<script type="text/javascript" src="_scripts/main.js"></script>

<style>
#loading{
	background-color: #db9e36;
	height: 100%;
	width: 100%;
	position: fixed;
	z-index: 1;
	margin-top: 0px;
	top: 0px;
}
#loading-center{
	width: 100%;
	height: 100%;
	position: relative;
	}
#loading-center-absolute {
	position: absolute;
	left: 50%;
	top: 50%;
	height: 150px;
	width: 150px;
	margin-top: -75px;
	margin-left: -75px;	
	-ms-transform: rotate(45deg); 
   	-webkit-transform: rotate(45deg);
    transform: rotate(45deg); 

}
.object{
	width: 20px;
	height: 20px;
	background-color:#FFF;
	position: absolute;
	left: 65px;
	top: 65px;
	}
.object:nth-child(2n+0) {
	margin-right: 0px;

}


#object_one {
	-webkit-animation: object_one 2s infinite;
	animation: object_one 2s infinite;
	-webkit-animation-delay: 0.2s; 
    animation-delay: 0.2s; 
	}
#object_two {
	-webkit-animation: object_two 2s infinite;
	animation: object_two 2s infinite;
	-webkit-animation-delay: 0.3s; 
    animation-delay: 0.3s; 
	}
#object_three {
	-webkit-animation: object_three 2s infinite;
	animation: object_three 2s infinite;
	-webkit-animation-delay: 0.4s; 
    animation-delay: 0.4s; 
	}
#object_four {
	-webkit-animation: object_four 2s infinite;
	animation: object_four 2s infinite;
	-webkit-animation-delay: 0.5s; 
    animation-delay: 0.5s; 
}
#object_five {
	-webkit-animation: object_five 2s infinite;
	animation: object_five 2s infinite;
	-webkit-animation-delay: 0.6s; 
    animation-delay: 0.6s; 
}
#object_six {
	-webkit-animation: object_six 2s infinite;
	animation: object_six 2s infinite;
	-webkit-animation-delay: 0.7s; 
    animation-delay: 0.7s; 
}
#object_seven {
	-webkit-animation: object_seven 2s infinite;
	animation: object_seven 2s infinite;
	-webkit-animation-delay: 0.8s; 
    animation-delay: 0.8s; 
}
#object_eight {
	-webkit-animation: object_eight 2s infinite;
	animation: object_eight 2s infinite;
	 -webkit-animation-delay: 0.9s; 
    animation-delay: 0.9s; 
}

#object_big{
	
	position: absolute;
	width: 50px;
	height: 50px;
	left: 50px;
	top: 50px;
	-webkit-animation: object_big 2s infinite;
	animation: object_big 2s infinite;
		 -webkit-animation-delay: 0.5s; 
    animation-delay: 0.5s; 
}	




@-webkit-keyframes object_big {
 50% { -webkit-transform: scale(0.5); }

}

@keyframes object_big {
 50% { 
    transform: scale(0.5);
    -webkit-transform: scale(0.5);
  } 

}




@-webkit-keyframes object_one {
 50% { -webkit-transform: translate(-65px,-65px)  ; }

}

@keyframes object_one {
 50% { 
    transform: translate(-65px,-65px) ;
    -webkit-transform: translate(-65px,-65px) ;
  } 

}



@-webkit-keyframes object_two {
  50% { -webkit-transform: translate(0,-65px) ; }
}

@keyframes object_two {
 50% { 
    transform: translate(0,-65px) ; 
    -webkit-transform: translate(0,-65px) ; 
  } 

}



@-webkit-keyframes object_three {
 50% { -webkit-transform: translate(65px,-65px) ; }
}

@keyframes object_three {
 50% { 
    transform: translate(65px,-65px) ;
    -webkit-transform: translate(65px,-65px) ;
  } 
}



@-webkit-keyframes object_four {
  
  50% { -webkit-transform: translate(65px,0) ; }

}

@keyframes object_four {
  50% { 
    transform: translate(65px,0) ;
    -webkit-transform: translate(65px,0) ;
  } 

}




@-webkit-keyframes object_five {
  
  50% { -webkit-transform: translate(65px,65px) ; }

}

@keyframes object_five {
  50% { 
    transform: translate(65px,65px) ;
    -webkit-transform: translate(65px,65px) ;
  } 

}



@-webkit-keyframes object_six {
  
  50% { -webkit-transform: translate(0,65px) ; }

}

@keyframes object_six {
  50% { 
    transform:  translate(0,65px) ;
    -webkit-transform:  translate(0,65px) ;
  } 

}




@-webkit-keyframes object_seven {
  
  50% { -webkit-transform: translate(-65px,65px) ; }

}

@keyframes object_seven {
  50% { 
    transform: translate(-65px,65px) ;
    -webkit-transform: translate(-65px,65px) ;
  } 

}


@-webkit-keyframes object_eight {
  
  50% { -webkit-transform: translate(-65px,0) ; }

}

@keyframes object_eight {
  50% { 
    transform: translate(-65px,0) ;
    -webkit-transform: translate(-65px,0) ;
  } 

}


</style>
<script>
$(window).load(function() {
   $("#loading").fadeOut(500);
})
</script>
</head>
<body>

<div class="object" id="object_one"></div>
<div class="object" id="object_two"></div>
<div class="object" id="object_three"></div>
<div class="object" id="object_four"></div>
<div class="object" id="object_five"></div>
<div class="object" id="object_six"></div>
<div class="object" id="object_seven"></div>
<div class="object" id="object_eight"></div>
<div class="object" id="object_big"></div>
</div>
</div>
 
</div>



</script>  
	<!-- //cart-js -->	
	<!-- countdown.js -->	
	<script src="js/jquery.knob.js"></script>
	<script src="js/jquery.throttle.js"></script>
	<script src="js/jquery.classycountdown.js"></script>
		<script>
			$(document).ready(function() {
				$('#countdown1').ClassyCountdown({
					end: '1388268325',
					now: '1387999995',
					labels: true,
					style: {
						element: "",
						textResponsive: .5,
						days: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#1abc9c",
								lineCap: 'round'
							},
							textCSS: 'font-weight:300; color:#fff;'
						},
						hours: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#05BEF6",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						},
						minutes: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#8e44ad",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						},
						seconds: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#f39c12",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						}

					},
					onEndCallback: function() {
						console.log("Time out!");
					}
				});
			});
		</script>
	<!-- //countdown.js -->
	<!-- menu js aim -->
	<script src="js/jquery.menu-aim.js"> </script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster --> 
<!-- header -->
<div class="header">
	<div class="container">
		<ul>
			<li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Giao hàng miễn phí và nhanh chóng</li>
			<li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Miễn phí vận chuyển tất cả các đơn hàng</li>
			<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:trananhvu@gmail.com">trananhvu@gmail.com</a></li>
		</ul>
	</div>
</div>


<a href="#" id="toTop" style="display:block;">
<span id="toTopHover" style="opacity:0;"></span>

</a>



<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '8c945ab7-0b40-45cf-a8c0-a3f85c12af43', f: true }); done = true; } }; })();</script>





