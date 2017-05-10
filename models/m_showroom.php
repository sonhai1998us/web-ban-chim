<?php
require_once("database.php");
class M_showroom extends database
{
	public function Doc_showroom()
	{
		$sql="select * from showroom";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	public function Doc_showroom_theo_ma_showroom($ma_showroom)
	{
		$sql="select * from showroom where ma_showroom=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_showroom));
	}
	
	public function Doc_showroom_theo_trang_thai($trang_thai)
	{
		$sql="select * from showroom where trang_thai=?";
		$this->setQuery($sql);
		return $this->loadAllRows(array($trang_thai));
	}
	
	
}
	/*$ma_showroom=1;
	$m_showroom = new M_showroom();
	$showroom = $m_showroom->Doc_showroom_theo_ma_showroom($ma_showroom);
	echo "<pre>";
	print_r($showroom) ;
	echo "</pre>";*/
?>