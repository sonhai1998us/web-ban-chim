<?php
@session_start();
include ("models/m_chim_canh.php");
include ("Pager.php");
class C_chim_canh
{
	function Hien_thi_chim_canh()
	{
			// Models
			$m_chim_canh=new M_chim_canh();
			$chim_canhs=$m_chim_canh->Doc_chim_canh();
			$gt="";
			if(isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
				$chim_canhs=$m_chim_canh->Doc_chim_canh($gt);
			}
			// Phân trang
			$p=new pager();
			$limit=6;
			$count=count($chim_canhs);
			$pages=$p->findPages($count,$limit);
			$vt=$p->findStart($limit);
			$curpage=$_GET["page"];
			$lst=$p->pageList($curpage,$pages);
			$chim_canhs=$m_chim_canh->Doc_chim_canh($gt,$vt,$limit);
			// View
			$title="Quản lý chim cảnh";
			$tieude="Danh sách chim cảnh";
			$view="views/chim_canh/v_chim_canh.php";
			include("include/layout.php");	
	
	}
	function Them_chim_canh()
	{
			// Models
			$m_chim_canh=new M_chim_canh();
			$chim_canhss=$m_chim_canh->loai_chim();
  //`ma_chim`, `ten_chim`, `nguon_goc`, `gia`, `dien_giai`, `dien_thoai`, `hinh`, `hinh_nho`, `khuyen_mai`, `ngay_cap_nhat`, `loai`, trang_thai 
			if(isset($_POST["btnCapnhat"]))
			{
				$ten_chim=$_POST["ten_chim"];
				$nguon_goc=$_POST["nguon_goc"];
				$gia=$_POST["gia"];
				$dien_giai=$_POST["dien_giai"];
				$dien_thoai=$_POST["dien_thoai"];
				$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"";
				$hinh_nho=$_FILES["hinh_nho"]["error"]==0?$_FILES["hinh_nho"]["name"]:"";
				$khuyen_mai=$_POST["khuyen_mai"];
				$ngay_cap_nhat=$_POST["ngay_cap_nhat"];
				$loai=$_POST["loai"];
				$trang_thai=$_POST["trang_thai"];
				
				$kq=$m_chim_canh->Them_chim_canh($ten_chim,$nguon_goc,$gia,$dien_giai,$dien_thoai,$hinh,$hinh_nho,$khuyen_mai,$ngay_cap_nhat,$loai,$trang_thai);
				if($kq)
				{
					$kq=move_uploaded_file($_FILES["hinh"]["tmp_name"],"../images/255x291/$hinh_nho");	
					$kq=move_uploaded_file($_FILES["hinh"]["tmp_name"],"../images/1000x675/$hinh");	
					
					echo "<script>alert('Thêm chim cảnh mới thành công');window.location='chim_canh.php' </script>";
				}
				else
				{
					echo "<script>alert('Thêm chim cảnh mới thất bại')</script>";	
				}
					
			}
			// View
			$title="Quản lý Chim Cảnh";
			$tieude="Thêm Chim Cảnh";
			
			
			$view="views/chim_canh/v_Themchimcanh.php";
			include("include/layout.php");	
	
	}
	function Sua_chim_canh()
	{
			// Models
			if(isset($_GET["ma_chim"]))
			{
				$ma_chim=$_GET["ma_chim"];
			
				// Models
				$m_chim_canh=new M_chim_canh();
				$chim_canh=$m_chim_canh->Doc_chim_canh_theo_ma_chim($ma_chim);
				$chim_canhss=$m_chim_canh->loai_chim();
			}
			// Cập nhật
			if(isset($_POST["btnCapnhat"]))
			{
				$ten_chim=$_POST["ten_chim"];
				$nguon_goc=$_POST["nguon_goc"];
				$gia=$_POST["gia"];
				$dien_giai=$_POST["dien_giai"];
				$dien_thoai=$_POST["dien_thoai"];
				$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"";
				$hinh_nho=$_FILES["hinh_nho"]["error"]==0?$_FILES["hinh_nho"]["name"]:"";
				$khuyen_mai=$_POST["khuyen_mai"];
				$ngay_cap_nhat=$_POST["ngay_cap_nhat"];
				$loai=$_POST["loai"];
				$trang_thai=$_POST["trang_thai"];

				$kq=$m_chim_canh->Sua_chim_canh($ten_chim,$nguon_goc,$gia,$dien_giai,$dien_thoai,$hinh,$hinh_nho,$khuyen_mai,$ngay_cap_nhat,$loai,$trang_thai,$ma_chim);
				if($kq)
				{
					if($_FILES["hinh"]["error"]==0)
					{
						// Di chuyển hình về server
						$kq=move_uploaded_file($_FILES["hinh"]["tmp_name"],"../images/1000x675/$hinh");	
					}
					if($_FILES["hinh_nho"]["error"]==0)
					{
						// Di chuyển hình về server
						$kq=move_uploaded_file($_FILES["hinh"]["tmp_name"],"../images/255x291/$hinh_nho");	
					}
					echo "<script>alert('Cập nhật chim cảnh thành công');window.location='chim_canh.php' </script>";
				}
				else
				{
					echo "<script>alert('Cập nhật chim cảnh thất bại')</script>";	
				}
					
			}
			
			// View
			
			$title="Quản lý chim cảnh";
			$tieude="Sửa chim cảnh";
			$view="views/chim_canh/v_Suachimcanh.php";
			include("include/layout.php");
	
	}
}
?>