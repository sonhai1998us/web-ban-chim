<?php
require_once ('database.php');
class M_bo_suu_tap extends database
{
    // Quản trị

	public function Doc_bo_suu_tap($tim="",$vt=-1,$limit=-1)
    {
		$dk="";
		if($tim!="")
		{
			$dk = "where ten like '% $tim%' or ten like '%$tim %'";
		}
		$sql = "Select * from anh_dep ". $dk ." order by ma desc";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
	
    public function Doc_bo_suu_tap_theo_bo_suu_tap($ma)
    {
        $sql = "Select * from anh_dep where ma =?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma));
    }
    //`ma`, `title`, `content_summary`, `content_detail`, `date_send`, `date_post`, `views`, `images`, `author`
	public function Them_bo_suu_tap($ten, $hinh, $ngay_dang, $ma_nguoi_dung, $noi_dung, $nguoi_cung_cap)
	   {
		  $sql="insert into anh_dep values(?,?,?,?,?,?,?)";
		  $this->setQuery($sql);
		  return $this->execute(array(NULL,$ten, $hinh, $ngay_dang, $ma_nguoi_dung, $noi_dung, $nguoi_cung_cap));
	   }
	 
	 public function Sua_bo_suu_tap($ten, $hinh, $ngay_dang, $ma_nguoi_dung, $noi_dung, $nguoi_cung_cap,$ma)
	   {
		  $sql="update anh_dep set ten=? , hinh=? , ngay_dang=? , ma_nguoi_dung=? , noi_dung=? , nguoi_cung_cap=? Where ma=?";
		  $this->setQuery($sql);
		  return $this->execute(array($ten, $hinh, $ngay_dang, $ma_nguoi_dung, $noi_dung, $nguoi_cung_cap,$ma));
	   }
	   public function Xoa_bo_suu_tap($ma)
	   {
		   $sql="delete from anh_dep where ma=?";
		   $this->setQuery($sql);
		   return $this->execute(array($ma));
	   }
}

  //`ma`, `ten_chim`, `nguon_goc`, `gia`, `dien_giai`, `dien_thoai`, `hinh`, `hinh_nho`, `khuyen_mai`, `ngay_cap_nhat`, `loai`, trang_thai 
?>
