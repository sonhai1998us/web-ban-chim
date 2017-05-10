<?php
include("includes/header_single.php");
include("includes/header_bot.php");
include("includes/banner_top.php");
include("includes/banner.php");
?>
<div class="checkout">
	<div class="container">
		<h3 style="color:#F00">Giỏ hàng của tôi</h3>
		<div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
			<table class="timetable_sub">
				<thead>
					<tr>
						<th>Xóa sản phẩm</th>
						<th>Sản phẩm</th>
						<th>Số lượng</th>
						<th>Tên sản phẩm</th>
						<th>Giá</th>
					</tr>
				</thead>
					<tr class="rem1">
						<td class="invert-closeb">
							<div class="rem">
								<div class="close1"> </div>
							</div>
							<script>$(document).ready(function(c) {
								$('.close1').on('click', function(c){
									$('.rem1').fadeOut('slow', function(c){
										$('.rem1').remove();
									});
									});	  
								});
						   </script>
						</td>
						<td class="invert-image"><a href="single.php"><img src="images/255x291/1363870959chao_mao21_1.jpg" alt=" " class="img-responsive" /></a></td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<td class="invert">Chào mào</td>
						<td class="invert">$45.99</td>
					</tr>
					<tr class="rem2">
						<td class="invert-closeb">
							<div class="rem">
								<div class="close2"> </div>
							</div>
							<script>$(document).ready(function(c) {
								$('.close2').on('click', function(c){
									$('.rem2').fadeOut('slow', function(c){
										$('.rem2').remove();
									});
									});	  
								});
						   </script>
						</td>
						<td class="invert-image"><a href="single.php"><img src="images/255x291/1363870959chao_mao21_1.jpg" alt=" " class="img-responsive" /></a></td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<td class="invert">Chích chòe</td>
						<td class="invert">$45.99</td>
						
					</tr>

					
								<!--quantity-->
									<script>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script>
								<!--quantity-->
			</table>
		</div>
		<div class="checkout-left">	
				
				<div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
					<a href="."><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Tiếp tục mua hàng</a>
				</div>
				<div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
					<h4>Giỏ hàng</h4>
					<ul>
						<li>Chào mào <i>-</i> <span>$45.99</span></li>
						<li>Chích chòe <i>-</i> <span>$45.99</span></li>
						<li>Tổng tiền <i>-</i> <span>$183.96</span></li>
					</ul>
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
