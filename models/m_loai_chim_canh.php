<?php
ini_set("display_errors",1);
require_once("database.php");
class M_loai_chim_canh extends database
{
	//Đọc tất cả loại chim cảnh
	public function Doc_loai_chim_canh($vt=-1,$limit=-1)
	{
		$sql="select * from loai_chim_canh";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	//Đọc loại chim cảnh theo ma_loai
	public function Doc_loai_chim_canh_theo_ma_loai($ma_loai)
	{
		$sql="select * from loai_chim_canh where ma_loai=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_loai));
	}
	
	
	
	
	
	//làm menu chim cảnh
	public function Doc_ma_loai_chim($ma_loai_cha=0)
	{
		$sql="select ma_loai,ten_loai from loai_chim_canh where ma_loai_cha=$ma_loai_cha order by ten_loai";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	
	public function Menu_Loai_chim()
	{
		$loaicha=$this->Doc_ma_loai_chim();
		foreach($loaicha as $loai)
		{
			$loai_con=$this->Doc_ma_loai_chim($loai->ma_loai);
			$loai->items=$loai_con;
		}
		return $loaicha;	
	}
	
	
	//làm menu phụ kiện
	public function Doc_ma_loai_pk($ma_loai_cha=21)
	{
		$sql="select ma_loai,ten_loai from loai_chim_canh where ma_loai_cha=$ma_loai_cha order by ten_loai";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	
	public function Menu_Loai_pk()
	{
		$loaicha=$this->Doc_ma_loai_pk();
		foreach($loaicha as $loai)
		{
			$loai_con=$this->Doc_ma_loai_pk($loai->ma_loai);
			$loai->items=$loai_con;
		}
		return $loaicha;	
	}
	
}


?>