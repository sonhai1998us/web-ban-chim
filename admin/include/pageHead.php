<?php
@session_start();
?>
<h2>Quản trị Chim Cảnh</h2>
			<p id="page-intro">Ngày cập nhật: <?php echo date("d/m/Y") ?> </p>
			<ul class="shortcut-buttons-set">
					
				<li><a class="shortcut-button" href="hoadon.php"><span>
					<img src="public/layout/resources/images/icons/pencil_48.png" alt="icon" /><br />
					Hóa đơn
				</span></a></li>
				
				<li><a class="shortcut-button" href="themchimcanh.php"><span>
					<img src="public/layout/resources/images/icons/Bird-red-icon.png" alt="icon" /><br />
					Thêm chim cảnh
				</span></a></li>
				
				<li><a class="shortcut-button" href="themtintuc.php"><span>
					<img src="public/layout/resources/images/icons/news.jpg" alt="icon" /><br />
					Thêm tin tức
				</span></a></li>
				
				<li><a class="shortcut-button" href="themuser.php"><span>
					<img src="public/layout/resources/images/icons/add-user-512.png" alt="icon" /><br />
					Thêm user
				</span></a></li>
                
                <li><a class="shortcut-button" href="themuser.php"><span>
					<img src="public/layout/resources/images/icons/pencil_48.png" alt="icon" style="max-height:30px;" /><br />
					<div id="countDH" style="color:red" >Có <?php echo $hd?> hóa đơn chưa thanh toán</div>
				</span></a></li>
                
                <li><a class="shortcut-button" href="javascript:void(0)" onclick="dhTong()"><span>
				<img src="public/layout/resources/images/icons/re.jpg" alt="icon" style="max-height:60px;" />
                <br /></span></a></li>
			</ul><!-- End .shortcut-buttons-set -->
			
			