<?php
$db=new database();
$vt=0;
$limit=8;
$loai="1";
$sql="select * from chim_canh where loai in($loai) limit $vt,$limit";
$db->setQuery($sql);
$chim=$db->loadAllRows();
?>


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
					<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Chào Mào</span></li> 
					<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Chích Chòe</span></li> 
					<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Lồng chim</span></li>
                    <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>Thức ăn</span></li> 
				</ul>				  	 
				<div class="resp-tabs-container">
                <!-- tab 0-->
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						<?php
                        foreach($chim as $cm)
						{
						?>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/255x291/<?php echo $cm->hinh_nho?>" alt="" class="pro-image-front">
									<img src="images/255x291/<?php echo $cm->hinh_nho?>" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php?ma_chim=<?php echo $cm->ma_chim?>" class="link-product-add-cart">Xem nhanh</a>
											</div>
										</div>
										<span class="product-new-top">Hàng mới</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="#"><?php echo $cm->ten_chim?></a></h4>
									<div class="info-product-price">
										<span class="item_price"><?php echo number_format($cm->gia,0,",",".")?> VNĐ</span>
										
									</div>
									<!--a href="#" class="item_add single-item hvr-outline-out button2">MUA HÀNG</a-->
<form class="form-item">
<input type="hidden" name="product_qty" value="1" />
<input name="product_code" type="hidden" value="<?php echo $cm->ma_chim ?>">
<button type="submit" style="background:#F90 !important" class="item_add single-item hvr-outline-out button2">Mua hàng</button>				
</form>									                                    									
								</div>
							</div>
						</div>
						<?php
						}
						?>
						
                            
					</div>
                
                <!-- //hết tab 0-->
                 
                <!-- tab 1-->
					<?php
                    include("page/product_cc.php");
					?>
                <!-- //hết tab 1-->
                
                <!-- tab 2-->
					<?php
                    include("page/product_long.php");
					?>
                <!-- //hết tab 2-->
                
                <!-- tab 3-->
					<?php
                    include("page/product_ta.php");
					?>
                <!-- //hết tab 3-->		
				</div>	
			</div>
		</div>
	</div>
</div>