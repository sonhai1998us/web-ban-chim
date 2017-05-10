<?php
class C_chim_canh
{
	//Hiển thị tất cả các chim cảnh
	public function Hien_thi_chim()
	{
		//Models
		include("models/m_chim_canh.php");
		$m_chim_canh=new M_chim_canh();
		$loai="1,2,3,10,11,12,13,14,15,20";
		$chim_canhs=$m_chim_canh->Doc_chim_canh_theo_loai($loai);
		
		
		require("controllers/Pager.php");
		//Phân trang
		$p=new pager();
		$limit=8; // Số sản phẩm trên một trang
		$count=count($chim_canhs); // Tổng số khách hàng
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit) ;// Vị trí trang 
		$curpage=$_GET["page"]; // Get page hiện hành
		$lst=$p->pageList($curpage,$pages);
		
		//load lại trang
		$chim_canhs=$m_chim_canh->Doc_chim_canh_theo_loai($loai,$vt,$limit);
		//Views
		include("views/chim_canh/v_chim.php");

	}
	
	//theo loại
	public function Hien_thi_chim_theo_loai()
	{
		//Models
		$loai=$_GET["ma_loai"];
		include("models/m_chim_canh.php");
		$m_chim_canh=new M_chim_canh();
		$chim_canhs=$m_chim_canh->Doc_chim_canh_theo_loai($loai);
		
		
		require("controllers/Pager.php");
		//Phân trang
		$p=new pager();
		$limit=8; // Số sản phẩm trên một trang
		$count=count($chim_canhs); // Tổng số khách hàng
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit) ;// Vị trí trang 
		$curpage=$_GET["page"]; // Get page hiện hành
		$lst=$p->pageList($curpage,$pages);
		
		//load lại trang
		$chim_canhs=$m_chim_canh->Doc_chim_canh_theo_loai($loai,$vt,$limit);
		//Views
		include("views/chim_canh/v_product.php");

	}
	
	
	
	//hiển thị chi tiết chim cảnh
	public function Hien_thi_chi_tiet_chim()
	{
		//Models
		$ma_chim=$_GET["ma_chim"];
		include("models/m_chim_canh.php");
		$m_chim_canh=new M_chim_canh();
		$chim_canh=$m_chim_canh->Doc_chim_canh_theo_ma_chim($ma_chim);
		
		//đọc chim cùng loại
		$loai=$chim_canh->loai;
		$vt=0;
		$limit=4;
		$chim_cung_loai=$m_chim_canh->Doc_chim_canh_cung_loai($loai,$ma_chim,$vt,$limit);
		
		//Views
		include("views/chim_canh/v_chi_tiet_chim.php");
		
	}
	
	//phụ kiện
	public function Hien_thi_phu_kien()
	{
		//Models
		include("models/m_chim_canh.php");
		$m_chim_canh=new M_chim_canh();
		$loai="6,7,16,17,18,19";
		$phu_kiens=$m_chim_canh->Doc_chim_canh_theo_loai($loai);
		//echo count($phu_kiens);
		
		require("controllers/Pager.php");
		
		//Phân trang
		$p=new pager();
		$limit=8; // Số sản phẩm trên một trang
		$count=count($phu_kiens); // Tổng số khách hàng
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit) ;// Vị trí trang 
		$curpage=$_GET["page"]; // Get page hiện hành
		$lst=$p->pageList($curpage,$pages);
		
		//load lại trang
		$phu_kiens=$m_chim_canh->Doc_chim_canh_theo_loai($loai,$vt,$limit);
		
		
		//Views
		include("views/chim_canh/v_phu_kien.php");
	}
	
	
	//Tìm kím
	public function Tim_kim()
	{
		//Models
		$ten=$_POST["ten"];
		$loai=$_POST["loai"];
		include("models/m_chim_canh.php");
		$m_chim_canh=new M_chim_canh();
		$chims=$m_chim_canh->Doc_chim_theo_ten($loai,$ten);
		//echo count($chims);
	
		
		//Views
		include("views/chim_canh/v_tim_kim.php");
	}
}



?>