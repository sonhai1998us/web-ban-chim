<?php
require_once ('database.php');
class M_bai_viet extends database
{
    // Quản trị

	public function Doc_bai_viet($tim="",$vt=-1,$limit=-1)
    {
		$dk="";
		if($tim!="")
		{
			$dk = "where tieu_de like '% $tim%' or tieu_de like '%$tim %'";
		}
		$sql = "Select * from bai_viet ". $dk ." order by ma_bai_viet desc";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
	
    public function Doc_bai_viet_theo_ma_bai_viet($ma_bai_viet)
    {
        $sql = "Select * from bai_viet where ma_bai_viet =?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_bai_viet));
    }
//ma_bai_viet, ma_loai_bai_viet, ma_nguoi_dung, tieu_de, noi_dung_tom_tat, noi_dung_chi_tiet, hinh, hinh_nho, ngay_gui_bai, ngay_xuat_ban, ngay_het_han, so_lan_xem, xuat_ban
	public function Them_bai_viet($ma_nguoi_dung, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet, $hinh, $hinh_nho, $ngay_gui_bai, $ngay_xuat_ban, $ngay_het_han, $so_lan_xem, $xuat_ban)
	   {
		  $sql="insert into bai_viet values(?,?,?,?,?,?,?,?,?,?,?,?,?)";
		  $this->setQuery($sql);
		  return $this->execute(array(NULL, NULL, $ma_nguoi_dung, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet, $hinh, $hinh_nho, $ngay_gui_bai, $ngay_xuat_ban, $ngay_het_han, $so_lan_xem, $xuat_ban));
	   }
	 
	 public function Sua_bai_viet(/*$ma_loai_bai_viet,*/ $ma_nguoi_dung, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet, $hinh, $hinh_nho, $ngay_gui_bai, $ngay_xuat_ban, $ngay_het_han, $so_lan_xem, $xuat_ban,$ma_bai_viet)
	   {
		  $sql="update bai_viet set ma_nguoi_dung=?, tieu_de=?, noi_dung_tom_tat=?, noi_dung_chi_tiet=?, hinh=?, hinh_nho=?, ngay_gui_bai=?, ngay_xuat_ban=?, ngay_het_han=?, so_lan_xem=?, xuat_ban=? Where ma_bai_viet=?";
		  $this->setQuery($sql);
		  return $this->execute(array(/*$ma_loai_bai_viet,*/ $ma_nguoi_dung, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet, $hinh, $hinh_nho, $ngay_gui_bai, $ngay_xuat_ban, $ngay_het_han, $so_lan_xem, $xuat_ban,$ma_bai_viet));
	   }
	   public function Xoa_bai_viet($ma_bai_viet)
	   {
		   $sql="delete from bai_viet where ma_bai_viet=?";
		   $this->setQuery($sql);
		   return $this->execute(array($ma_bai_viet));
	   }
}

  //ma_bai_viet, ten_bai_viet, nguon_goc, gia, dien_giai, dien_thoai, hinh, hinh_nho, khuyen_mai, ngay_cap_nhat, loai, trang_thai 
?>
