<?php
@session_start(); //start session
include("includes/header_card.php");
include("includes/header_bot.php");
include("includes/banner_top.php");
include("includes/banner.php");
?>
</br>
<div style="padding-left:40px; padding-right:40px">
<h2 style="color:#F00">Chúng tôi xin cám ơn quí khách đã mua hàng tại website ... </h2>
<p>Nhân viên chúng tôi sẽ giao hàng tại địa chỉ: <?php echo $khach_hang->Diachigiaohang ?></p>
<p>Người nhận hàng Anh/Chị: <?php echo $khach_hang->Hoten ?></p>
<p>Điện thoại liên hệ: <?php echo $khach_hang->Dienthoai ?></p>
<p>Hình thức thanh toán: <?php echo $hinh_thuc_thanh_toan ?></p>
<p>Tổng tiền thanh toán: <?php echo number_format($tong_tien) ?> đồng</p>
<h3 style="color:#F00">Đơn hàng của quí khách</h3></br>
<table width="100%" border="1" cellspacing="2" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <th style="background:#F90" align="center">Sản phẩm</th>
    <th style="background:#F90" align="center">Hình sản phẩm</th>
    <th style="background:#F90" align="center">Số lượng</th>
    <th style="background:#F90" align="center">Đơn giá</th>
    <th style="background:#F90" align="center">Thành tiền</th>
  </tr>
  <?php
	foreach($gio_hang as $item)
	{  
		$thanhtien=$item["product_qty"]*$item["product_price"];
  ?>
  <tr>
    <th align="center"><?php echo $item["product_name"] ?></th>
    <th align="center"><img src="images/1000x675/<?php echo $item["product_image"] ?>" width="100" height="70"  /></th>
    <th align="center"><?php echo $item["product_qty"] ?></th>
    <th align="center"><?php echo $item["product_price"] ?> đồng</th>
    <th align="center"><?php echo number_format($thanhtien) ?> đồng</th>
  </tr>
  <?php
	}

  ?>
</table>
</div>
<br />
<div><button type="submit" onclick="window.location='.'">Tiếp tục mua hàng</div><br>
<?php
include("includes/footer.php");
include("includes/login.php");
?>
