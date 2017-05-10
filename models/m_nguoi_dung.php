<?php
require_once("database.php");
class M_nguoi_dung extends database
{
	//Đọc tất cả nguoi_dung
	public function Doc_nguoi_dung($vt=-1,$limit=-1)
	{
		$sql="select * from nguoi_dung";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	//Đọc nguoi_dung theo ma_nguoi_dung
	public function Doc_nguoi_dung_theo_ma_nguoi_dung($ma_nguoi_dung)
	{
		$sql="select * from nguoi_dung where ma_nguoi_dung=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_nguoi_dung));
	}
}

$ma_nguoi_dung=10;
$m_nguoi_dung=new M_nguoi_dung();
$nguoi_dung=$m_nguoi_dung->Doc_nguoi_dung_theo_ma_nguoi_dung($ma_nguoi_dung);
$nguoi_dungs=$m_nguoi_dung->Doc_nguoi_dung();
echo count($nguoi_dungs);
?>