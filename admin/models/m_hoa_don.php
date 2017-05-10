<?php
require_once('database.php');
class M_hoa_don extends database
{
    // Quản trị

	public function Tong_don_hang()
	{
		$sql="select count(*) from hoa_don where tinh_trang='1'";
		$this->setQuery($sql);
		return $this->loadRecord();
			
	}
	
	public function Thong_ke_hoa_don()
    {
        
		$sql='SELECT concat(Month(ngay_hoadon),"-",Year(ngay_hoadon)) as ThangNam,sum(trigia_hd) as tong  FROM `hoa_don` 
  group by Month(ngay_hoadon),Year(ngay_hoadon)';
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
	
	public function Doc_hoa_don($gt="")
    {
        
		$sql='SELECT hd.*,Hoten from hoa_don hd,khach_hang kh where hd.ma_kh=kh.maKh';
		if($gt!="")
		{
			$sql.=" and tinh_trang=?";	
		}
        $this->setQuery($sql);
        return ($gt!="")?$this->loadAllRows(array($gt)):$this->loadAllRows();
    }
	public function Doc_hoa_don_theo_ma_hoa_don($ma_hoa_don)
    {
		$sql='SELECT hd.*,Hoten,email,Diachi,Dienthoai from hoa_don hd,khach_hang kh where hd.ma_kh=kh.maKH and so_hd=?';

        $this->setQuery($sql);
        return $this->loadRow(array($ma_hoa_don));
    }
	public function Doc_chi_tiet_hoa_don_theo_ma_hoa_don($ma_hoa_don)
    {
		$sql='SELECT ct.*,ten_chim,hinh from ct_hoa_don ct,chim_canh cc where ct.ma_hang=cc.ma_chim and so_hd=?';

        $this->setQuery($sql);
        return $this->loadAllRows(array($ma_hoa_don));
    }
	// Cập nhật lại tình trạng đơn hàng
	public function Cap_nhat_tinh_trang($ma_hoa_don,$tinh_trang)
	{
		$sql="update hoa_don set tinh_trang=? where so_hd=?";
		$this->setQuery($sql);
		return $this->execute(array($tinh_trang,$ma_hoa_don));
	}
}

	?>