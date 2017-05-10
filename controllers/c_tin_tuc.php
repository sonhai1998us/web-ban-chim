<?php
class C_tin_tuc
{
	public function Hien_thi_tin_tuc()
	{
		//Models
		include("models/m_tin_tuc.php");
		$m_tin_tuc=new M_tin_tuc();
		$tin_tucs=$m_tin_tuc->Doc_tin_tuc();
		//echo count($tin_tucs);
		//Views
		include("views/tin_tuc/v_tin_tuc.php");
		
	}
	
	//Hiển thị chi tiết tin tức
	public function Hien_thi_chi_tiet_tin_tuc()
	{
		//Models
		$ma_bai_viet=$_GET["ma_bai_viet"];
		include("models/m_tin_tuc.php");
		$m_tin_tuc=new M_tin_tuc();
		$tin_tuc=$m_tin_tuc->Doc_tin_tuc_theo_ma_bai_viet($ma_bai_viet);
		//echo count($tin_tuc);
		//Views
		include("views/tin_tuc/v_chi_tiet_tin_tuc.php");
		
	}
	
	
}

?>