<?php
require_once("database.php");
class M_khach_hang extends database
{
	function Dang_nhap($email,$mat_khau)
	{
		$sql="select * from khach_hang where email=? and mat_khau=?";
		$this->setQuery($sql);
		return $this->loadRow(array($email,$mat_khau));	
	}
	
	function Kiem_tra_email($email)
	{
		$sql="select * from khach_hang where email=?";
		$this->setQuery($sql);
		return $this->loadRow(array($email));	
	}
	//`MaKH`, `Hoten`, `Diachi`, `Dienthoai`, `Diachigiaohang`, `email`, `mat_khau`
	
	function Dang_ky($Hoten,$Diachi,$Dienthoai,$Diachigiaohang,$email,$mat_khau)
	{
		$sql="insert into khach_hang values(?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		$param=array(NULL,$Hoten,$Diachi,$Dienthoai,$Diachigiaohang,$email,md5($mat_khau));
		return $this->execute($param);
	}
	
	//Đọc tất cả khách hàng
	public function Doc_khach_hang($vt=-1,$limit=-1)
	{
		$sql="select * from khach_hang";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	//Đọc khách hàng theo ma_khach_hang
	public function Doc_khach_hang_theo_MaKH($MaKH)
	{
		$sql="select * from khach_hang where MaKH=?";
		$this->setQuery($sql);
		return $this->loadRow(array($MaKH));
	}
}

/*$MaKH=75;
$m_khach_hang=new M_khach_hang();
$khach_hang=$m_khach_hang->Doc_khach_hang_theo_MaKH($MaKH);
$khach_hangs=$m_khach_hang->Doc_khach_hang(0,2);
echo count($khach_hang);*/
?>