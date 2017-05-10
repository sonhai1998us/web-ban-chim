<?php
class C_showroom
{
	public function Hien_thi_showroom()
	{
		//models
		require("models/m_showroom.php");
		$m_showroom= new M_showroom();
		$showroomss= $m_showroom->Doc_showroom();
		
		//views
		require("views/showroom/v_showroom.php");
	}

	public function Hien_thi_showroom_theo_ma_showroom()
	{
		$ma_showroom = $_GET["ma_showroom"];
		//models
		include("models/m_showroom.php");
		$m_showroom= new M_showroom();
		$showroom= $m_showroom->Doc_showroom_theo_ma_showroom($ma_showroom);
		//views
		include("views/showroom/v_showroom.php");
	}
	
		public function Hien_thi_showroom_theo_trang_thai()
	{
		$trang_thai = $_GET["trang_thai"];
		//models
		require("models/m_showroom.php");
		$m_showroom = new M_showroom();
		$showrooms = $m_showroom->Doc_showroom_theo_trang_thai($trang_thai);
		//views
		require("views/showroom/v_showroom.php");
	}
}

?>