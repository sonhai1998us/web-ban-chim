<?php
@session_start(); //start session
include("includes/header_card.php");
include("includes/header_bot.php");
include("includes/banner_top.php");
include("includes/banner.php");
?>
<br>
<h1 style="text-align:center; color:#F00">Đơn hàng của bạn <?php echo $_SESSION["ten_khach_hang"] ?></h1>
<br>
<center>(cập nhật lại số lượng sản phẩm hay xóa sản phẩm)</center>
<?php
if(isset($_SESSION["products"]) && count($_SESSION["products"])>0){
	$total 			= 0;
	$list_tax 		= '';
	$cart_box 		= '<ul class="view-cart">';
	$tbl='<table class="timetable_sub" width="100%" border="1" cellspacing="2" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <th>Hình sản phẩm</th>
    <th>Tên sản phẩm</th>
    <th>Số lượng</th>
    <th>Đơn giá</th>
    <th>Thành tiền</th>
	<th>&nbsp;</th>
  </tr>';
  	$cart_box.="<li>".$tbl;
	foreach($_SESSION["products"] as $product){ //Print each item, quantity and price.
		$product_name = $product["product_name"];
		$product_qty = $product["product_qty"];
		$product_price = $product["product_price"];
		$product_code = $product["product_code"];
		$product_image = $product["product_image"];
		
		$item_price 	= number_format(($product_price * $product_qty),0,",",".");  // price x qty = total item price
		$row="<tr>
				<td align='center'><img src='images/1000x675/".$product_image."' width='100px' height='80px'></td>
				<td>". $product_name ."</td>
				<td><input data_code='$product_code' type='number' value='$product_qty' class='product_qty' name='product_qty' min='1' style='width:30px' ></td>
</td>
				<td>". number_format($product_price,0,",",".") ."$currency</td>
				<td>$item_price $currency</td>
				<td><div class=\"shopping-cart\"><a href=\"javascript:void(0)\" class=\"remove-item\" data-code=\"$product_code\"><img src=\"images/delete.png\" /></a></div></td>
			</tr>"; 
		$cart_box.=$row;
		$subtotal 		= ($product_price * $product_qty); //Multiply item quantity * price
		$total 			= ($total + $subtotal); //Add up to total price
	}
	
	$cart_box.="</table></li>";
	
	$grand_total = $total + $shipping_cost; //grand total
	
	foreach($taxes as $key => $value){ //list and calculate all taxes in array
			$tax_amount 	= round($total * ($value / 100));
			$tax_item[$key] = $tax_amount;
			$grand_total 	= $grand_total + $tax_amount; 
	}
	
	foreach($tax_item as $key => $value){ //taxes List
		$list_tax .= $key. ' :'. number_format($value,0,",","."). $currency.'<br />';
	}
	
	$shipping_cost = ($shipping_cost)?'Phí vận chuyển : '. $shipping_cost.'<br />':'';
	
	//Print Shipping, VAT and Total
	$cart_box .= "<li class=\"view-cart-total\">$shipping_cost  $list_tax <hr>Tổng thành tiền : ".number_format($grand_total,0,",",".").$currency."</li>";
	
	$cart_box.="<li><form method=\"post\" action=\"dat_hang.php\"><fieldset><legend><h4>Hình thức thanh toán:</h4></legend><center>";
	$cart_box.="<input type='radio' value='Tiền mặt' name='httt' checked> Tiền mặt &nbsp;";
	$cart_box.="<input type='radio' value='Chuyển khoản' name='httt'> Chuyển khoản &nbsp;";
	$cart_box.="<input type='radio' value='Thẻ tín dụng' name='httt'> Thẻ tín dụng &nbsp;";
	$cart_box.="</center></fieldset><hr></li>";
	
	$cart_box.="<li><center><button type=\"submit\" onclick=\"window.location='.'; return false\" >Mua tiếp</button>&nbsp;&nbsp;<button type=\"submit\" value=\"end\" name=\"end\" >Đặt hàng</button></center></form></li>";
	$cart_box .= "</ul>";
	
	echo $cart_box;
}else{
	echo "<br>";
	echo "<h1 align=\"center\" style='color:#F00'>Giỏ hàng của bạn trống...</h1>";
	echo "<br>";
}


include("includes/footer.php");
include("includes/login.php");
?>
