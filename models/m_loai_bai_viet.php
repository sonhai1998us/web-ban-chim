<?php
require_once("database.php");
class M_loai_bai_viet extends database
{
	//Đọc tất cả loại bài viết
	public function Doc_loai_bai_viet($vt=-1,$limit=-1)
	{
		$sql="select * from loai_bai_viet";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	//Đọc loại bài viết theo ma_loai_bai_viet
	public function Doc_loai_bai_viet_theo_ma_loai_bai_viet($ma_loai_bai_viet)
	{
		$sql="select * from loai_bai_viet where ma_loai_bai_viet=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_loai_bai_viet));
	}
}

$ma_loai_bai_viet=194;
$m_loai_bai_viet=new M_loai_bai_viet();
$loai_bai_viet=$m_loai_bai_viet->Doc_loai_bai_viet_theo_ma_loai_bai_viet($ma_loai_bai_viet);
$loai_bai_viets=$m_loai_bai_viet->Doc_loai_bai_viet();
echo count($loai_bai_viets);
?>