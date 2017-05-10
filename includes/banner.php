<div class="banner-grid">
	<div id="visual">
			<div class="slide-visual">
				<!-- Slide Image Area (1000 x 424) -->
				<ul class="slide-group">
					<li><img class="img-responsive" src="images/slider/banner1111.jpg" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="images/slider/banner2222.jpg" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="images/slider/banner33333.jpg" alt="Dummy Image" /></li>
				</ul>

				<!-- Slide Description Image Area (316 x 328) -->
				<div class="script-wrap">
				
					<div class="slide-controller">
						<a href="#" class="btn-prev"><img src="images/slider/btn_prev.png" alt="Prev Slide" /></a>
						<a href="#" class="btn-play"><img src="images/slider/btn_play.png" alt="Start Slide" /></a>
						<a href="#" class="btn-pause"><img src="images/slider/btn_pause.png" alt="Pause Slide" /></a>
						<a href="#" class="btn-next"><img src="images/slider/btn_next.png" alt="Next Slide" /></a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	<script type="text/javascript" src="js/pignose.layerslider.js"></script>
	<script type="text/javascript">
	//<![CDATA[
		$(window).load(function() {
			$('#visual').pignoseLayerSlider({
				play    : '.btn-play',
				pause   : '.btn-pause',
				next    : '.btn-next',
				prev    : '.btn-prev'
			});
		});
	//]]>
	</script>

</div>