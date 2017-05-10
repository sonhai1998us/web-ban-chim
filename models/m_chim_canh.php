<?php
require_once("database.php");
class M_chim_canh extends database
{
	//Đọc tất cả chim cảnh
	public function Doc_chim_canh($vt=-1,$limit=-1)
	{
		$sql="select * from chim_canh";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	//Đọc chi tiết chim cảnh theo ma_chim
	public function Doc_chim_canh_theo_ma_chim($ma_chim)
	{
		$sql="select * from chim_canh where ma_chim=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_chim));
	}
	
	//Đọc chim cảnh cùng loại
	public function Doc_chim_canh_cung_loai($loai,$ma_chim,$vt=-1,$limit=-1)
	{
		$sql="select * from chim_canh where loai=$loai and ma_chim!=$ma_chim";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	
	//Đọc chim cảnh theo loại
	public function Doc_chim_canh_theo_loai($loai,$vt=-1,$limit=-1)
	{
		$sql="select * from chim_canh where loai in($loai)";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function Doc_chim_theo_ten($loai,$ten)
	{
		$sql="select * from chim_canh WHERE loai in($loai) and ten_chim LIKE '%$ten%' ";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}

/*$ma_chim=77;
$m_chim_canh=new M_chim_canh();
$chim_canh=$m_chim_canh->Doc_chim_canh_theo_ma_chim($ma_chim);
$chim_canhs=$m_chim_canh->Doc_chim_canh();
echo count($chim_canh);*/
?>