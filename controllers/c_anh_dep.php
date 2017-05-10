<?php
class C_anh_dep
{
	public function Hien_thi_anh_dep()
	{
		//Models
		include("models/m_anh_dep.php");
		$m_anh_dep=new M_anh_dep();
		$anh_deps=$m_anh_dep->Doc_anh_dep();
		
		
		
		//Views
		include("views/anh_dep/v_anh_dep.php");
	}
}


?>