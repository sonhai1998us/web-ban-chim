<?php
$vt=0;
$limit=8;
$db=new database();
$sql="select * from bai_viet limit 0,7";
$db->setQuery($sql);
$tins=$db->loadAllRows();
?>

    
    <div class="news-right-bottom">
							<div class="wthree-news-right-heading">
								<h3>Tin được xem nhiều</h3>
							</div>
							<div class="news-right-bottom-bg">
								<div class="news-grids-bottom">
                                
                               <?php
                                     foreach($tins as $tin)
							{
										?>	
									<div class="top-news-grid">
										<div class="top-news-grid-heading" align="left">
											<a href="news_single.php?ma_bai_viet=<?php echo $tin->ma_bai_viet?>"><?php echo $tin->tieu_de?></a>
										</div>
										<div class="w3ls-news-t-grid top-t-grid">
										</div>
									</div>
								<?php
										}
								?>
								</div>
							</div>
                            
						</div>
                       