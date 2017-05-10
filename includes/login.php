<?php
@session_start();
include("models/m_khach_hang.php");
include("models/m_dat_hang.php");
		// Models
		$thong_bao="";
		$kq="";
		if(isset($_POST["btnDangnhap"]))
		{
			$email=$_POST["dn_email"];
			$mat_khau=$_POST["dn_mat_khau"];	
			$m_khach_hang=new M_khach_hang();
			$kq=$m_khach_hang->Dang_nhap($email,md5($mat_khau));
			if($kq)
			{
				// Lưu session 
				$_SESSION["ma_khach_hang"]=$kq->MaKH;
				$_SESSION["ten_khach_hang"]=$kq->Hoten;
				//$thong_bao="Chào ". $kq->Hoten .",  vui lòng nhấn nút tiếp để xem giỏ hàng của bạn...";
				//header("location:.");
				echo "<script>alert('Bạn đã đăng nhập thành công, chúc bạn có một ngày mua sắm vui vẻ')</script>";
				echo "<script>window.location:.</script>";
				
				
			}
			else
			{
				//$thong_bao="Tài khoản của bạn không hợp lệ...Xem lại";	
				echo "<script>alert('Tài khoản của bạn không hợp lệ...Xem lại')</script>";
			}	
		}
		if(isset($_POST["btnDangky"]))
		{
			$m_khach_hang=new M_khach_hang();
			
			$ten_khach_hang=$_POST["dk_ten_khach_hang"];
			$mat_khau=$_POST["dk_mat_khau"];
			$email=$_POST["dk_email"];
			$dia_chi=$_POST["dk_dia_chi"];
			$dien_thoai=$_POST["dk_dien_thoai"];
			$ghi_chu=$_POST["dk_ghi_chu"];
			// Kiểm tra mail là duy nhất
			$kq=$m_khach_hang->Kiem_tra_email($email);
			if(!$kq)
			{	// $Hoten,$Diachi,$Dienthoai,$Diachigiaohang,$email,$mat_khau
				$kq=$m_khach_hang->Dang_ky($ten_khach_hang,$dia_chi,$dien_thoai,$ghi_chu,$email,$mat_khau);
				if($kq)
				{
					//$thong_bao="Bạn đăng ký thành công. Đăng nhập vào website của chúng tôi để mua hàng";
					echo "<script>alert('Bạn đăng ký thành công. Đăng nhập vào website của chúng tôi để mua hàng')</script>";	
				}
				else
				{
					//$thong_bao="Đã có lỗi xảy ra trong quá trình đăng ký. Bạn hãy làm lại...";
					echo "<script>alert('Đã có lỗi xảy ra trong quá trình đăng ký. Bạn hãy làm lại...')</script>";
				}
			}
			else
			{
				//$thong_bao="Email của bạn đã tồn tại trong hệ thống website của chúng tôi";	
				echo "<script>alert('Email của bạn đã tồn tại trong hệ thống website của chúng tôi')</script>";
			}
			
		}




//đăng nhập




?>


<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Đăng kí miễn phí</h3>
										<form method="post">
											<div class="sign-up">
												<h4>Họ tên<sup style="color:red">*</sup> :</h4>
												<input type="text" name="dk_ten_khach_hang" value="...." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required>	
											</div>
											<div class="sign-up">
												<h4>Email<sup style="color:red">*</sup> :</h4>
												<input type="text" name="dk_email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
												
											</div>
                                            <div class="sign-up">
												<h4>Mật khẩu<sup style="color:red">*</sup> :</h4>
												<input type="password" name="dk_mat_khau" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required>
												
											</div>
                                            <div class="sign-up">
												<h4>Xác nhận lại Mật khẩu<sup style="color:red">*</sup> :</h4>
												<input type="password" name="dk_mat_khau_xac_nhan" value="Re Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Re Password';}" required>
												
											</div>
                                            <div class="sign-up">
												<h4>Địa chỉ<sup style="color:red">*</sup> :</h4>
												<input type="text" name="dk_dia_chi" value="Địa chỉ" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Địa chỉ';}" required>
												
											</div>
											<div class="sign-up">
												<h4>Điện thoại<sup style="color:red">*</sup> :</h4>
												<input type="text" name="dk_dien_thoai" value="Điện thoại" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Điện thoại';}" required>
												
											</div>
                                             <div class="sign-up">
												<h4>Địa chỉ giao hàng<sup style="color:red">*</sup>:</h4>
												<input type="text" name="dk_ghi_chu" value="Địa chỉ giao hàng" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Địa chỉ';}" required>
												
											</div>
											<div class="sign-up">
												<input type="submit" name="btnDangky" value="ĐĂNG KÝ" >
											</div>
											
										</form>
									</div>
                                    
                                    
                                    
                                    
                                    
                       
                                    
									<div class="login-right">
										<h3>Đăng nhập</h3>
										<form  method="post">
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" name="dn_email" value="...."  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required>	
											</div>
											<div class="sign-in">
												<h4>Mật khẩu :</h4>
												<input type="password" value="Password" name="dn_mat_khau" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required>
												<a href="#">Quên mật khẩu?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Ghi nhớ.</label>
											</div>
											<div class="sign-in">
												<input type="submit" name="btnDangnhap" value="ĐĂNG NHẬP" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>Bằng cách đăng nhập <a href="#">bạn đồng ý với các Điều khoản</a> ,  <a href="#">Điều kiện
                                 và Chính sách Bảo mật</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
</body>
</html>