<?php
include_once("models/thu_vien.php");
class C_lien_he
{
	
	
	public function Lien_he()
	{
		
			//Kiểm tra gửi thông tin liên hệ
			if(isset($_POST["btn_gui_lien_he"]))
			{
				$ho_ten = $_POST["txt_ho_ten"];
				$email = $_POST["txt_email"];
				$tieu_de = "Liên hệ";
				$thong_tin = $_POST["txt_thong_tin"];
				$dien_thoai = "0908953765";
	
				//Gửi mail
				$noi_dung_mail = "<b>Từ: </b>$ho_ten<p/><b>Email:</b> $email<p/><b>Điện thoại: </b>$dien_thoai<p/>$thong_tin";
				$kq = thu_vien::Gui_mail_lien_he($tieu_de, $noi_dung_mail);
				if($kq) {
					echo "<script type=\"text/javascript\">alert('Gửi liên hệ thành công!')</script>";
				}
				else {
					echo "<script type=\"text/javascript\">alert('Lỗi gửi liên hệ!')</script>";
				}
			}
			//End
		
		//Views
		include("views/v_lien_he.php");
		
	}
}
?>