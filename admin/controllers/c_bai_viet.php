<?php
@session_start();
include ("models/m_bai_viet.php");
include ("Pager.php");
class C_bai_viet
{
	function Hien_thi_bai_viet()
	{
			// Models
			$m_bai_viet=new M_bai_viet();
			$bai_viets=$m_bai_viet->Doc_bai_viet();
			$gt="";
			if(isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
				$bai_viets=$m_bai_viet->Doc_bai_viet($gt);
			}
			// Phân trang
			$p=new pager();
			$limit=6;
			$count=count($bai_viets);
			$pages=$p->findPages($count,$limit);
			$vt=$p->findStart($limit);
			$curpage=$_GET["page"];
			$lst=$p->pageList($curpage,$pages);
			$bai_viets=$m_bai_viet->Doc_bai_viet($gt,$vt,$limit);
			// View
			$title="Quản lý bài viết";
			$tieude="Danh sách bài viết";
			$view="views/bai_viet/v_bai_viet.php";
			include("include/layout.php");	
	
	}
	function Them_bai_viet()
	{
			// Models
			$m_bai_viet=new M_bai_viet();
  //ma_bai_viet, ma_bai_viet, ma_nguoi_dung, tieu_de, noi_dung_tom_tat, noi_dung_chi_tiet, hinh, hinh_nho, ngay_gui_bai, ngay_het_han, ngay_het_han, so_lan_xem, xuat_ban
			if(isset($_POST["btnCapnhat"]))
			{
				
				$ma_nguoi_dung=$_POST["ma_nguoi_dung"];
				$tieu_de=$_POST["tieu_de"];
				$noi_dung_tom_tat=$_POST["noi_dung_tom_tat"];
				$noi_dung_chi_tiet=$_POST["noi_dung_chi_tiet"];
				$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"";
				$hinh_nho=$_FILES["hinh_nho"]["error"]==0?$_FILES["hinh_nho"]["name"]:"";
				$ngay_gui_bai=$_POST["ngay_gui_bai"];
				$ngay_het_han=$_POST["ngay_het_han"];
				$ngay_xuat_ban=$_POST["ngay_xuat_ban"];
				$so_lan_xem=$_POST["so_lan_xem"];
				$xuat_ban=$_POST["xuat_ban"];
				$kq=$m_bai_viet->Them_bai_viet( $ma_nguoi_dung, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet, $hinh, $hinh_nho, $ngay_gui_bai, $ngay_xuat_ban, $ngay_het_han, $so_lan_xem, $xuat_ban);
				if($kq)
				{
					$kq=move_uploaded_file($_FILES["hinh"]["tmp_name"],"../images/tintuc/$hinh");	
					$kq=move_uploaded_file($_FILES["hinh_nho"]["tmp_name"],"../images/tintuc/$hinh_nho");	
					echo "<script>alert('Thêm bài viết mới thành công');window.location='baiviet.php' </script>";
				}
				else
				{
					echo "<script>alert('Thêm bài viết mới thất bại')</script>";	
				}
					
			}
			// View
			$title="Quản lý bài viết";
			$tieude="Thêm Loại bài viết";
			
			
			$view="views/bai_viet/v_Thembaiviet.php";
			include("include/layout.php");	
	
	}
	function Sua_bai_viet()
	{
			// Models
			if(isset($_GET["ma_bai_viet"]))
			{
				$ma_bai_viet=$_GET["ma_bai_viet"];
				// Models
				$m_bai_viet=new M_bai_viet();
				$bai_viet=$m_bai_viet->Doc_bai_viet_theo_ma_bai_viet($ma_bai_viet);
			}
			// Cập nhật
			if(isset($_POST["btnCapnhat"]))
			{
				//$ma_loai_bai_viet=$_POST["ma_loai_bai_viet"];
				$ma_nguoi_dung=$_POST["ma_nguoi_dung"];
				$tieu_de=$_POST["tieu_de"];
				$noi_dung_tom_tat=$_POST["noi_dung_tom_tat"];
				$noi_dung_chi_tiet=$_POST["noi_dung_chi_tiet"];
				$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"";
				$hinh_nho=$_FILES["hinh_nho"]["error"]==0?$_FILES["hinh_nho"]["name"]:"";
				$ngay_gui_bai=$_POST["ngay_gui_bai"];
				$ngay_het_han=$_POST["ngay_het_han"];
				$ngay_xuat_ban=$_POST["ngay_xuat_ban"];
				$so_lan_xem=$_POST["so_lan_xem"];
				$xuat_ban=$_POST["xuat_ban"];

				$kq=$m_bai_viet->Sua_bai_viet(/*$ma_loai_bai_viet,*/ $ma_nguoi_dung, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet, $hinh, $hinh_nho, $ngay_gui_bai, $ngay_xuat_ban, $ngay_het_han, $so_lan_xem, $xuat_ban,$ma_bai_viet);
				if($kq)
				{
					if($_FILES["hinh"]["error"]==0)
					{
						// Di chuyển hình về server
						$kq=move_uploaded_file($_FILES["hinh"]["tmp_name"],"public/images/tintuc/$hinh");	
					}
					if($_FILES["hinh_nho"]["error"]==0)
					{
						// Di chuyển hình về server
						$kq=move_uploaded_file($_FILES["hinh"]["tmp_name"],"public/images/tintuc/$hinh_nho");	
					}
					echo "<script>alert('Cập nhật bài viết thành công');window.location='baiviet.php' </script>";
				}
				else
				{
					echo "<script>alert('Cập nhật bài viết thất bại')</script>";	
				}
					
			}
			
			// View
			
			$title="Quản lý bài viết";
			$tieude="Sửa bài viết";
			$view="views/bai_viet/v_Suabaiviet.php";
			include("include/layout.php");
	
	}
}

?>