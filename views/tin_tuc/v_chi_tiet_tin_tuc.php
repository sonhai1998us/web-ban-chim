
<?php
include("includes/header_single.php");
include("includes/header_bot.php");
include("includes/banner_top.php");
//include("includes/banner.php");

?>

<!-- faq-banner -->
	<div class="faq">
			<div class="container">
				<div class="agileinfo-news-top-grids">
               
					<div class="col-md-8 wthree-top-news-left">
						<div class="wthree-news-left">
							<div class="wthree-news-left-img">
								<img src="images/tintuc/<?php echo $tin_tuc->hinh?>" alt="" />
								<h4><?php echo $tin_tuc->tieu_de?>.</h4>
								<div id="fb-root"></div>
								<div class="news-shar-buttons">
									<ul>
										<li>
											<div class="fb-like" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
											<script>(function(d, s, id) {
											  var js, fjs = d.getElementsByTagName(s)[0];
											  if (d.getElementById(id)) return;
											  js = d.createElement(s); js.id = id;
											  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
											  fjs.parentNode.insertBefore(js, fjs);
											}(document, 'script', 'facebook-jssdk'));</script>
										</li>
										<li>
											<div class="fb-share-button" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fw3layouts&amp;src=sdkpreparse">Share</a></div>
										</li>
										<li class="news-twitter">
											<a href="https://twitter.com/w3layouts" class="twitter-follow-button" data-show-count="false">Follow @w3layouts</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
										</li>
										<li>
											<a href="https://twitter.com/intent/tweet?screen_name=w3layouts" class="twitter-mention-button" data-show-count="false">Tweet to @w3layouts</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
										</li>
										<li>
											<!-- Place this tag where you want the +1 button to render. -->
											<div class="g-plusone" data-size="medium"></div>

											<!-- Place this tag after the last +1 button tag. -->
											<script type="text/javascript">
											  (function() {
												var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
												po.src = 'https://apis.google.com/js/platform.js';
												var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
											  })();
											</script>
										</li>
									</ul>
								</div>
								<div class="w3-agile-news-text">
									<p><?php echo $tin_tuc->noi_dung_chi_tiet?></p>
								</div>
							</div>
						</div>
                        
                       
                      
                        
						<!-- agile-comments -->
						<div class="agile-news-comments">
							<div class="agile-news-comments-info">
								<h4>Bình luận</h4>
								<div class="fb-comments" data-href="http://chimcanhvts.byethost17.com/" data-width="100%" data-numposts="5"></div>
							</div>
						</div>
						<!-- //agile-comments -->
						<div class="news-related">
						</div>
					</div>
                    
                    
                    
                    
                    
                    
					<div class="col-md-4 wthree-news-right">
						
						<!-- news-right-bottom -->
					<?php
                        include("views/tin_tuc/v_tin_moi.php");
						?>
                        
						<div class="clearfix"> </div>
                        <?php
						 include("views/tin_tuc/v_tin_moi_cap_nhat.php");
						?>
						<!-- //news-right-bottom -->
					</div>
					<div class="clearfix"> </div>
                    
                    
				</div>
			</div>
				
	</div>
<!-- //faq-banner -->

<?php
//include("includes/huong_dan.php");
include("includes/footer.php");
include("includes/login.php");
?>