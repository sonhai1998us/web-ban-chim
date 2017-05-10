<?php
$vt=0;
$limit=8;
$db=new database();
$sql="select * from chim_canh where loai in(6,7,9,17,18,19) limit $vt,$limit";
$db->setQuery($sql);
$chim=$db->loadAllRows();
?>

<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
					<?php
                    foreach($chim as $cc)
					{
					?>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/255x291/<?php echo $cc->hinh_nho?>" alt="" class="pro-image-front">
									<img src="images/255x291/<?php echo $cc->hinh_nho?>" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php?ma_chim=<?php echo $cc->ma_chim?>" class="link-product-add-cart">Xem nhanh</a>
											</div>
										</div>
										<span class="product-new-top">Hàng mới</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="#"><?php echo $cc->ten_chim?></a></h4>
									<div class="info-product-price">
										<span class="item_price"><?php echo number_format($cc->gia,0,",",".")?> VNĐ</span>
										
									</div>
									<!--a href="#" class="item_add single-item hvr-outline-out button2">MUA HÀNG</a-->
<form class="form-item">
<input type="hidden" name="product_qty" value="1" />
<input name="product_code" type="hidden" value="<?php echo $cc->ma_chim ?>">
<button type="submit" style="background:#F90 !important" class="item_add single-item hvr-outline-out button2">Mua hàng</button>				
</form>																		
								</div>
							</div>
						</div>
					<?php
					}
					?>	
						

					</div>