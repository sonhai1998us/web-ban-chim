<?php
include("includes/header_single.php");
include("includes/header_bot.php");
include("includes/banner_top.php");
include("includes/banner.php");

?>

<!-- single -->
<div class="single">
	<div class="container">
		<div class="col-md-6 single-right-left animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					<!-- FlexSlider -->
						<script>
						// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
								});
							});
						</script>
					<!-- //FlexSlider-->
					<ul class="slides">
						
							<div class="thumb-image"> <img src="images/1000x675/<?php echo $chim_canh->hinh?>" data-imagezoom="true" class="img-responsive"> </div>
					</ul>
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>
		<div class="col-md-6 single-right-left simpleCart_shelfItem animated wow slideInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
					<h3><?php echo $chim_canh->ten_chim?></h3>  <br />
          <div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="5">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
                   
                    <form class="form-item">
					<table>
                    	<tr>
                            <!-- sau này thay bằng đánh giá bằng facebook,google-->
                            <td colspan="2"><div class="news-shar-buttons">
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
								</div></td>
                          </tr>
                    <tr  style="font-weight:bold">
                            <td width="209">Giá bán </td>
                            <td width="144" style="color:#F00"><?php echo number_format($chim_canh->gia,0,",",".")?><sup>đ</sup></td>
                         </tr>

                          <tr style="font-weight:bold">
                            <td>Nguồn gốc  </td>
                            <td><?php echo $chim_canh->nguon_goc?></td>
                          </tr>
                          <tr  style="font-weight:bold">
                            <td>Liên hệ  </td>
                            <td><?php echo $chim_canh->dien_thoai?></td>
                          </tr>
                          
                          <tr  style="font-weight:bold">
                            <td >Số lượng  </td>
                            <td><input type="number" name="product_qty" min="1" value="1" style="width:30px" />
</td>
							<td><input name="product_code" type="hidden" value="<?php echo $chim_canh->ma_chim ?>">
</td>
                          </tr>
                          
                          
                    </table>
                   
                   
				<br />
						<button type="submit" style="background:#F90 !important" class="item_add single-item hvr-outline-out button2">Mua hàng</button>
				
                
                </form>
                
                
                
                
					
		</div>
				<div class="clearfix"> </div>

								<div class="bootstrap-tab animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Thông tin sản phẩm</a></li>
							<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Bình luận</a></li>
							
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active bootstrap-tab-text" id="home" aria-labelledby="home-tab">
								<h5 style="color:#FC6">Thông tin mô tả sản phẩm</h5>
								<p><span><?php echo $chim_canh->dien_giai?>.</span></p>
									
							</div>
							<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="profile" aria-labelledby="profile-tab">
								<div class="bootstrap-tab-text-grids">
									<!-- agile-comments -->
										<div class="agile-news-comments">
							<div class="agile-news-comments-info">
								<h4>Bình luận</h4>
								<div class="fb-comments" data-href="http://chimcanhvts.byethost17.com/" data-width="100%" data-numposts="5"></div>
							</div>
						</div>
									<!-- //agile-comments -->
								</div>
							</div>
                         
						</div>
					</div>
                    
				</div>
                
	</div>

<!-- danh mục sp cùng loại-->
   <div class="product-easy">
	<div class="container">
		
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});
							
		</script>
		<div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Danh mục sản phẩm cùng loại</span></li> 
					
				</ul>				  	 
				<div class="resp-tabs-container">
                <!-- tab 0-->
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                    <?php
                    foreach($chim_cung_loai as $loai)
					{
					?>
					<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/255x291/<?php echo $loai->hinh_nho?>" alt="" class="pro-image-front">
									<img src="images/255x291/<?php echo $loai->hinh_nho?>" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php?ma_chim=<?php echo $loai->ma_chim?>" class="link-product-add-cart">Xem nhanh</a>
											</div>
										</div>
										<span class="product-new-top">Hàng mới</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="#"><?php echo $loai->ten_chim?></a></h4>
									<div class="info-product-price">
										<span class="item_price"><?php echo number_format($loai->gia,0,",",".");?> VNĐ</span>
										
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">MUA HÀNG</a>									
								</div>
							</div>
						</div>
					<?php
					}
					?>	
	
						
					</div>
                
                <!-- //hết tab 0-->
                
				</div>	
			</div>
		</div>
	</div>
</div>

	
</div>
<?php
//include("includes/huong_dan.php");
include("includes/footer.php");
include("includes/login.php");
?>

