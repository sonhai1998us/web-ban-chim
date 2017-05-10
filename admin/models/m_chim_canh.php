<?php
require_once ('database.php');
class M_chim_canh extends database
{
    // Quản trị

	public function Doc_chim_canh($tim="",$vt=-1,$limit=-1)
    {
		$dk="";
		if($tim!="")
		{
			$dk = "where ten_chim like '% $tim%' or ten_chim like '%$tim %'";
		}
		$sql = "Select * from chim_canh ". $dk ." order by ma_chim desc";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
	
    public function loai_chim()
    {
    	$sql="select * from loai_chim_canh";
    	$this->setQuery($sql);
    	return $this->loadAllRows(array());
    }

    public function Doc_chim_canh_theo_ma_chim($ma_chim)
    {
        $sql = "Select * from chim_canh where ma_chim =?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_chim));
    }

	public function Them_chim_canh($ten_chim,$nguon_goc,$gia,$dien_giai,$dien_thoai,$hinh,$hinh_nho,$khuyen_mai,$ngay_cap_nhat,$loai,$trang_thai)
	   {
		  $sql="insert into chim_canh values(?,?,?,?,?,?,?,?,?,?,?,?)";
		  $this->setQuery($sql);
		  return $this->execute(array(NULL,$ten_chim,$nguon_goc,$gia,$dien_giai,$dien_thoai,$hinh,$hinh_nho,$khuyen_mai,$ngay_cap_nhat,$loai,$trang_thai));
	   }
	 
	 public function Sua_chim_canh($ten_chim,$nguon_goc,$gia,$dien_giai,$dien_thoai,$hinh,$hinh_nho,$khuyen_mai,$ngay_cap_nhat,$loai,$trang_thai,$ma_chim)
	   {
		  $sql="update chim_canh set ten_chim=?,nguon_goc=?,gia=?,dien_giai=?,dien_thoai=?,hinh=?,hinh_nho=?,khuyen_mai=?,ngay_cap_nhat=?,loai=?,trang_thai=? Where ma_chim=?";
		  $this->setQuery($sql);
		  return $this->execute(array($ten_chim,$nguon_goc,$gia,$dien_giai,$dien_thoai,$hinh,$hinh_nho,$khuyen_mai,$ngay_cap_nhat,$loai,$trang_thai,$ma_chim));
	   }
	   public function Xoa_chim_canh($ma_chim)
	   {
		   $sql="delete from chim_canh where ma_chim=?";
		   $this->setQuery($sql);
		   return $this->execute(array($ma_chim));
	   }
}

  //`ma_chim`, `ten_chim`, `nguon_goc`, `gia`, `dien_giai`, `dien_thoai`, `hinh`, `hinh_nho`, `khuyen_mai`, `ngay_cap_nhat`, `loai`, trang_thai 
?>
