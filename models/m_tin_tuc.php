<?php
require_once("database.php");
class M_tin_tuc extends database
{
	//Đọc tất cả bài viết
	public function Doc_tin_tuc($vt=-1,$limit=-1)
	{
		$sql="select * from bai_viet";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	//Đọc bài viết theo ma_tin_tuc
	public function Doc_tin_tuc_theo_ma_bai_viet($ma_bai_viet)
	{
		$sql="select * from bai_viet where ma_bai_viet=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_bai_viet));
	}
}


/*$ma_tin_tuc=15;
$m_tin_tuc=new M_tin_tuc();
$tin_tuc=$m_tin_tuc->Doc_tin_tuc_theo_ma_tin_tuc($ma_tin_tuc);
$tin_tucs=$m_tin_tuc->Doc_tin_tuc();
echo count($tin_tuc);*/

?>