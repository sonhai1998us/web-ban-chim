<?php
@session_start();
include("models/m_khach_hang.php");
include("models/m_dat_hang.php");
class C_dat_hang
{
	private function Tong_tien($arr)
	{
		$tong=0;
		foreach($arr as $item)
		{
			$tong+= $item["product_qty"]* $item["product_price"];
		}
		return $tong;	
	}
	
	public function Xu_ly_dat_hang()
	{
		// models
		$m_dat_hang=new M_dat_hang();
		$m_khach_hang=new M_khach_hang();
		// Thêm hóa đơn cho khách hàng
		$ma_khach_hang=$_SESSION["ma_khach_hang"];
		$gio_hang=$_SESSION["products"];
		$khach_hang=$m_khach_hang->Doc_khach_hang_theo_MaKH($ma_khach_hang);
		$hinh_thuc_thanh_toan=$_POST["httt"];
		$tong_tien=$this->Tong_tien($gio_hang);
		
		//$ngay_dat,$ma_khach_hang,$tong_tien,$tien_dat_coc,$tinh_trang
		$ma_hoa_don=$m_dat_hang->Them_hoa_don(date("Y-m-d"),$ma_khach_hang,$tong_tien,0,1);
		if($ma_hoa_don)
		{
			// Thêm chi tiết hóa đơn
			foreach($gio_hang as $item)
			{
				$ma_mon=$item["product_code"];
				$so_luong=$item["product_qty"];
				$don_gia=$item["product_price"];
				$thanh_tien=$so_luong*$don_gia;
				
				//$ma_hoa_don,$ma_mon,$so_luong,$don_gia,$thanh_tien
				$m_dat_hang->Them_chi_tiet_hoa_don($ma_hoa_don,$ma_mon,$so_luong,$don_gia,$thanh_tien);	
			}
			// Xóa session products
			unset($_SESSION["products"]); 
		}
		// View
		include("views/dat_hang/v_giao_hang.php");
	}
	
	
	public function Hien_thi_dat_hang()
	{
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
				$thong_bao="Chào ". $kq->Hoten .",  vui lòng nhấn nút tiếp để xem giỏ hàng của bạn...";	
			}
			else
			{
				$thong_bao="Tài khoản của bạn không hợp lệ...Xem lại";	
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
					$thong_bao="Bạn đăng ký thành công. Đăng nhập vào website của chúng tôi để mua hàng";	
				}
				else
				{
					$thong_bao="Đã có lỗi xảy ra trong quá trình đăng ký. Bạn hãy làm lại...";
				}
			}
			else
			{
				$thong_bao="Email của bạn đã tồn tại trong hệ thống website của chúng tôi";	
			}
			
		}
		
		// Views
		include("views/dat_hang/v_dat_hang.php");	
	}	
}
?>