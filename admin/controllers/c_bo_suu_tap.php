<?php
@session_start();
include ("models/m_bo_suu_tap.php");
include ("Pager.php");
class C_bo_suu_tap
{
	function Hien_thi_bo_suu_tap()
	{
			// Models
			$m_bo_suu_tap=new M_bo_suu_tap();
			$bo_suu_taps=$m_bo_suu_tap->Doc_bo_suu_tap();
			$gt="";
			if(isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
				$bo_suu_taps=$m_bo_suu_tap->Doc_bo_suu_tap($gt);
			}
			// Phân trang
			$p=new pager();
			$limit=6;
			$count=count($bo_suu_taps);
			$pages=$p->findPages($count,$limit);
			$vt=$p->findStart($limit);
			$curpage=$_GET["page"];
			$lst=$p->pageList($curpage,$pages);
			$bo_suu_taps=$m_bo_suu_tap->Doc_bo_suu_tap($gt,$vt,$limit);
			// View
			$title="Quản lý bộ sưu tập";
			$tieude="Danh sách bộ sưu tập";
			$view="views/bo_suu_tap/v_bo_suu_tap.php";
			include("include/layout.php");	
	
	}
//ma, ten, hinh, ngay_dang, ma_nguoi_dung, noi_dung, nguoi_cung_cap
	function Them_bo_suu_tap()
	{
			// Models
			$m_bo_suu_tap=new M_bo_suu_tap();
  
			if(isset($_POST["btnCapnhat"]))
			{
				$ten=$_POST["ten"];
				$noi_dung=$_POST["noi_dung"];
				$ngay_dang=$_POST["ngay_dang"];
				$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"";
				$ma_nguoi_dung=$_POST["ma_nguoi_dung"];
				$nguoi_cung_cap=$_POST["nguoi_cung_cap"];
				$kq=$m_bo_suu_tap->Them_bo_suu_tap($ten, $hinh, $ngay_dang, $ma_nguoi_dung, $noi_dung, $nguoi_cung_cap);
				if($kq)
				{
					$kq=move_uploaded_file($_FILES["hinh"]["tmp_name"],"../images/bosuutap/$hinh");	
					echo "<script>alert('Thêm hình mới thành công');window.location='bosuutap.php' </script>";
				}
				else
				{
					echo "<script>alert('Thêm hình mới thất bại')</script>";	
				}
					
			}
			// View
			$title="Quản lý bộ sưu tập";
			$tieude="Thêm bộ sưu tập";
			
			
			$view="views/bo_suu_tap/v_Thembosuutap.php";
			include("include/layout.php");	
	
	}
	function Sua_bo_suu_tap()
	{
			// Models
		//bo_suu_tap_id, title, content_summary, content_detail, date_send, date_post, views, images, author
			if(isset($_GET["ma"]))
			{
				$ma=$_GET["ma"];
				// Models
				$m_bo_suu_tap=new M_bo_suu_tap();
				$bo_suu_tap=$m_bo_suu_tap->Doc_bo_suu_tap_theo_bo_suu_tap($ma);
			}
			// Cập nhật
			if(isset($_POST["btnCapnhat"]))
			{
				$ten=$_POST["ten"];
				$noi_dung=$_POST["noi_dung"];
				$ngay_dang=$_POST["ngay_dang"];
				$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"";
				$ma_nguoi_dung=$_POST["ma_nguoi_dung"];
				$nguoi_cung_cap=$_POST["nguoi_cung_cap"];
				

				$kq=$m_bo_suu_tap->Sua_bo_suu_tap($ten, $hinh, $ngay_dang, $ma_nguoi_dung, $noi_dung, $nguoi_cung_cap,$ma);
				if($kq)
				{
					if($_FILES["hinh"]["error"]==0)
					{
						// Di chuyển hình về server
						$kq=move_uploaded_file($_FILES["hinh"]["tmp_name"],"../images/bosuutap/$hinh");	
					}
					echo "<script>alert('Cập nhật hình thành công');window.location='bosuutap.php' </script>";
				}
				else
				{
					echo "<script>alert('Cập nhật hình thất bại')</script>";	
				}
					
			}
			
			// View
			
			$title="Quản lý bộ sưu tập";
			$tieude="Sửa bộ sưu tập";
			$view="views/bo_suu_tap/v_Suabosuutap.php";
			include("include/layout.php");
	
	}
}
?>