<?php
require_once ('database.php');
class M_loai_chim extends database
{
    // Quản trị

	public function Doc_loai_chim($tim="",$vt=-1,$limit=-1)
    {
		$dk="";
		if($tim!="")
		{
			$dk = "where ten_loai like '% $tim%' or ten_loai like '%$tim %'";
		}
		$sql = "Select * from loai_chim_canh ". $dk ." order by ma_loai desc";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
	public function loai_cha()
	{
		$sql="select * from loai_chim_canh";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

    public function Doc_loai_chim_theo_ma_loai($ma_loai)
    {
        $sql = "Select * from loai_chim_canh where ma_loai =?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_loai));
    }
	// `ma_loai`, `ten_loai`, `mo_ta`, `hinh`
	public function Them_loai_chim($ten_loai,$ma_loai_cha,$links)
	   {
		  $sql="insert into loai_chim_canh values(?,?,?,?)";
		  $this->setQuery($sql);
		  return $this->execute(array(NULL,$ten_loai,$ma_loai_cha,$links));
	   }
	 
	 public function Sua_loai_chim($ten_loai,$ma_loai_cha,$ma_loai)
	   {
		  $sql="update loai_chim_canh set ten_loai=?,ma_loai_cha=? Where ma_loai=?";
		  $this->setQuery($sql);
		  return $this->execute(array($ten_loai,$ma_loai_cha,$ma_loai));
	   }
	   public function Xoa_loai_chim($ma_loai)
	   {
		   $sql="delete from loai_chim where ma_loai=?";
		   $this->setQuery($sql);
		   return $this->execute(array($ma_loai));
	   }
}
//`ma_loai_chim`, `tieu_de`, `tom_tat`, `chi_tiet`, `hinh`, `tac_gia`, `ngay_dang`, `ngay_gui`, `so_luot_xem`
?>
