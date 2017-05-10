<?php
include_once("models/database.php");
if(isset($_POST["submit"]))
{
$mail=$_POST["mail"];
$db=new database();
$sql="insert into lien_he values(?,?)";
$db->setQuery($sql);
$db->execute(array(NULL,$mail));
echo "<script>alert('Đã nhận thành công : $mail')</script>";
}

?>


<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left">
			<h2><a href="."><img src="images/logo/logoo.jpg" alt=" " /></a></h2>
			<div><br /><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FChim-c%E1%BA%A3nh-VTS-online-1651959628395351%2F&tabs=timeline&width=250&height=200&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="250" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></div>
		</div>
		<div class="col-md-9 footer-right">
			<div class="col-sm-6 newsleft">
				<h3>ĐĂNG KÝ ĐỂ NHẬN BẢN TIN</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form method="post">
					<input type="text" name="mail" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
					<input type="submit" name="submit" value="NHẬN">
				</form>
			</div>
			<div class="clearfix"></div>
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4><a href=".">Thông tin</a></h4>
					<ul>
						<li><a href=".">Trang chủ</a></li>
						<li><a href="chim.php">Các loại chim</a></li>
						<li><a href="phu_kien.php">Phụ kiện kèm theo</a></li>
						<li><a href="Lienhe.php">Liên hệ</a></li>
                        <li>  <!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,3621971,4,112,95,47,00011111']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?3621971&101" alt="" border="0"></a></noscript>
<!-- Histats.com  END  --></li>
					</ul>
				</div>
				
				<div class="col-md-4 sign-gd-two">
					<h4><a href="contact.php">Thông tin cửa hàng</a></h4>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Địa chỉ : 227 Nguyễn Văn Cừ, Phường 4,   <span>TP. Hồ Chí Minh</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:trananhvu120996@gmail.com">trananhvu@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Điện thoại : 0188 4777 670</li>
					</ul>
				</div>
				<div class="col-md-4 sign-gd flickr-post">
					<h4><a href="album.php">Hình ảnh nổi bật</a></h4>
					<ul>
						<li><a href="chim.php"><img src="images/chich_choe_1.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="chim.php"><img src="images/chich_choe_2.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="chim.php"><img src="images/chich_choe_3.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="chim.php"><img src="images/chich_choe_4.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="chim.php"><img src="images/chich_choe_5.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="chim.php"><img src="images/chich_choe_6.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="chim.php"><img src="images/chim_sau_1.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="chim.php"><img src="images/chim_sau_2.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="chim.php"><img src="images/chim_sau_3.jpg" alt=" " class="img-responsive" /></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">Nhóm Vũ Tú Sơn | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
</div>