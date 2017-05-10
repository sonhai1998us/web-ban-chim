	<?php
include("includes/header_single.php");
include("includes/header_bot.php");
include("includes/banner_top.php");
include("includes/banner.php");

?>
<div class="faq" align="center">
			<div class="container">
				<div class="agileinfo-news-top-grids">
					<div class="col-md-8 wthree-top-news-left">
						<div class="wthree-news-left">
							<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="myTab" class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#home1" id="home1-tab" role="tab" data-toggle="tab" aria-controls="home1" aria-expanded="true">Tin tức tổng hợp</a></li>
									
								</ul>
								<div id="myTabContent" class="tab-content">
                                	 <!--tab 1 --->
									<div role="tabpanel" class="tab-pane fade in active" id="home1" aria-labelledby="home1-tab">
										<div class="wthree-news-top-left">
                                        
                                        
                                        <!-- thay bằng foreach và đổ dữ liệu vào          ---->
                                         <!-- thay bằng foreach và đổ dữ liệu vào          ---->
                                          <!-- thay bằng foreach và đổ dữ liệu vào          ---->
                                           <!-- thay bằng foreach và đổ dữ liệu vào          ---->
                                            <!-- thay bằng foreach và đổ dữ liệu vào          ---->
                                        
                                        <?php
                                        foreach($tin_tucs as $tin)
										{
										?>
                                       
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news_single.php?ma_bai_viet=<?php echo $tin->ma_bai_viet?>"><img src="images/tintuc/<?php echo $tin->hinh_nho?>" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news_single.php?ma_bai_viet=<?php echo $tin->ma_bai_viet?>"><?php echo $tin->tieu_de?></a></h5>
													<br>
													
												</div>
												<div class="clearfix"> </div>
											</div>
                                           
                                        <?php
										
										}
									  	?>
									
											<div class="clearfix"> </div>
										</div>
									</div>
                                      <!--hết tab 1 --->
                                      
                                     
                                   
                                     
								</div>
							</div>
						</div>
					</div>
                    <div class="col-md-4 wthree-news-right">
						
						
						<!-- //news-right-top -->
						<!-- news-right-bottom -->
					<?php
                        include("views/tin_tuc/v_tin_moi.php");
						?>
						<!-- //news-right-bottom -->
					</div>
					
					<div class="clearfix"> </div>
				</div>
			</div>
	</div>


<?php
//include("includes/huong_dan.php");
include("includes/footer.php");
include("includes/login.php");
?>
