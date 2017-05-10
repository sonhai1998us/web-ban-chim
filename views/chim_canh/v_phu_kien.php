<?php
include("includes/header_single.php");
include("includes/header_bot.php");
include("includes/banner_top.php");
include("includes/banner.php");

?>
<div class="electronics">
	<div class="container">
	
		<div class="clearfix"></div>
			<div class="ele-bottom-grid">
				<h3><span>Các loại </span> phụ kiện</h3>
				<p>Đây là nơi trưng bày các loại chim, với các chủng loại, hình dáng và kích thước cũng như giá cả cực kì phong phú.</p>
                		<?php
                        foreach($phu_kiens as $phu)
						{				
						?>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/255x291/<?php echo $phu->hinh_nho?>" alt="" class="pro-image-front">
									<img src="images/255x291/<?php echo $phu->hinh_nho?>" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php?ma_chim=<?php echo $phu->ma_chim?>" class="link-product-add-cart">Xem nhanh</a>
											</div>
										</div>
										<span class="product-new-top">Hàng mới</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="#"><?php echo $phu->ten_chim?></a></h4>
									<div class="info-product-price">
										<span class="item_price"><?php echo number_format($phu->gia,0,",",".");?> VNĐ</span>
									</div>
									<!--a href="#" class="item_add single-item hvr-outline-out button2">MUA HÀNG</a> -->
                                    <form class="form-item">
<input type="hidden" name="product_qty" value="1" />
<input name="product_code" type="hidden" value="<?php echo $phu->ma_chim ?>">
<button type="submit" style="background:#F90 !important" class="item_add single-item hvr-outline-out button2">Mua hàng</button>				
</form>																	
								</div>
							</div>
						</div>
						<?php
						}
						?>
					
						<div class="clearfix"></div>
			</div>
             <div class="pagination-grid text-right" align="right">
			<ul class="pagination paging">
				<li><?php echo $lst ?></li>
			</ul>
		</div>
	</div>
</div>
<?php
//include("includes/huong_dan.php");
include("includes/footer.php");
include("includes/login.php");
?>
