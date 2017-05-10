<?php
$vt=0;
$limit=8;
$db=new database();
$sql="select * from bai_viet limit 0,7";
$db->setQuery($sql);
$tins=$db->loadAllRows();
?>



	<div class="clearfix"> </div>
					<div class="ele-bottom-grid1">
				<h3><span>Tin tức </span> được xem nhiều</h3>
                </div>
                    </br>
					<div id="myTabContent" class="tab-content" align="center">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
							<div class="tabcontent-grids">  
								<div id="owl-demo" class="owl-carousel"> 
                                
                                <?php
                                     foreach($tins as $tin)
							{
										?>	
                                
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<a href="news_single.php?ma_bai_viet=<?php echo $tin->ma_bai_viet?>"><img src="images/tintuc/<?php echo $tin->hinh_nho?>" alt="img"></a>
											<div class="view-caption agileits-w3layouts">
                                            </br>           
												<div><a href="news_single.php?ma_bai_viet=<?php echo $tin->ma_bai_viet?>"><?php echo $tin->tieu_de?></a></div>
												
												 
												
											</div>   
										</div>   
									</div>
                                    
                                    
                                    <?php
										}
								?>
								
								</div> 
							</div>
						</div>
						
					</div>   
                    