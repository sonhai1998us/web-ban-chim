<?php 
@session_start();
?>
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="."><img src="images/logo/logoo.jpg"></a></h1>
		</div>
		<div class="col-md-6 header-middle">
			<form method="post" name="frm" action="tim_kiem.php">
				<div class="search">
					<input name="ten" type="search" value="Tìm kiếm" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" required>
				</div>
				<div class="section_room">
					<select name="loai" id="country" onChange="change_country(this.value)" class="frm-field required">
						<option value="1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20">Tất cả thể loại</option>
						<option value="1,2,3,8,10,11,12,13,14,15,20">Các loại chim</option>     
						<option value="6,7,9,16,17,18,19">Các phụ kiện</option>
					</select>
				</div>
				<div class="sear-sub">
					<input name="submit" type="submit" value=" " onKeyUp="tim_kim.php">
				</div>
				<div class="clearfix"></div>
			</form>
		</div>
        <?php
        if(isset($_SESSION["ma_khach_hang"]))
		{
		?>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Chào bạn : <?php echo $_SESSION["ten_khach_hang"]; ?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Thông tin cá nhân</a></li>
                    <li><a href="quantri.php?func=exit">Đăng xuất</a></li>
                </ul>
            </li>
        </ul>
        <?php
		}
		else
		{
		?>
		<div class="col-md-3 header-right footer-bottom">
			<ul>
				<li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>Login</span></a>
					
				</li>
				<li><a class="fb" href="#"></a></li>
				<li><a class="twi" href="#"></a></li>
				<li><a class="insta" href="#"></a></li>
				<li><a class="you" href="#"></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
        
        <?php 
		}
		?>
	</div>
</div>