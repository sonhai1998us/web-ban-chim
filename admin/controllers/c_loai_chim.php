<?php
@session_start();
include ("models/m_loai_chim.php");
include ("Pager.php");
class C_loai_chim
{
	function Hien_thi_loai_chim()
	{
			// Models
			$m_loai_chim=new M_loai_chim();
			$loai_chims=$m_loai_chim->Doc_loai_chim();
			$gt="";
			if(isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
				$loai_chims=$m_loai_chim->Doc_loai_chim($gt);
			}
			// Phân trang
			$p=new pager();
			$limit=6;
			$count=count($loai_chims);
			$pages=$p->findPages($count,$limit);
			$vt=$p->findStart($limit);
			$curpage=$_GET["page"];
			$lst=$p->pageList($curpage,$pages);
			$loai_chims=$m_loai_chim->Doc_loai_chim($gt,$vt,$limit);
			// View
			$title="Quản lý loại chim cảnh";
			$tieude="Danh sách loại chim cảnh";
			$view="views/loaichim/v_loaichim.php";
			include("include/layout.php");	
	
	}
	function Them_loai_chim()
	{
			// Models
			$m_loai_chim=new M_loai_chim();
			// `ma_loai`, `ten_loai`, `ma_loai_cha`, `links`
			$loai=$m_loai_chim->loai_cha();
			if(isset($_POST["btnCapnhat"]))
			{
				$ten_loai=$_POST["ten_loai"];
				$ma_loai_cha=$_POST["ma_loai_cha"];
				$links=$_POST["links"];
				$kq=$m_loai_chim->Them_loai_chim($ten_loai,$ma_loai_cha,$links);
				if($kq)
				{
					echo "<script>alert('Thêm loại chim cảnh mới thành công');window.location='loaichim.php' </script>";
				}
				else
				{
					echo "<script>alert('Thêm loại chim cảnh mới thất bại')</script>";	
				}
					
			}
			// View
			$title="Quản lý loại chim cảnh";
			$tieude="Thêm Loại Chim Cảnh";
			
			
			$view="views/loaichim/v_Themloaichim.php";
			include("include/layout.php");	
	
	}
	function Sua_loai_chim()
	{
			// Models
			if(isset($_GET["ma_loai"]))

			{
				$ma_loai=$_GET["ma_loai"];
				// Models
				$m_loai_chim=new M_loai_chim();
				$loai_chim=$m_loai_chim->Doc_loai_chim_theo_ma_loai($ma_loai);
				$loai=$m_loai_chim->loai_cha();
				
			}
			// Cập nhật
			if(isset($_POST["btnCapnhat"]))
			{
				$ten_loai=$_POST["ten_loai"];
				$ma_loai_cha=$_POST["ma_loai_cha"];

				$kq=$m_loai_chim->Sua_loai_chim($ten_loai,$ma_loai_cha,$ma_loai);
				if($kq)
				{
					echo "<script>alert('Cập nhật loại chim cảnh thành công');window.location='loaichim.php' </script>";
				}
				else
				{
					echo "<script>alert('Cập nhật loại chim cảnh thất bại')</script>";	
				}
					
			}
			
			// View
			
			$title="Quản lý loại chim cảnh";
			$tieude="Sửa loại chim cảnh";
			$view="views/loaichim/v_Sualoaichim.php";
			include("include/layout.php");
	
	}
}
?>