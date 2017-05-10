<?php
@session_start();
include_once("models/m_user.php");
class C_user
{
	function Hien_thi_dang_nhap()
	{
		
		if(isset($_POST["login"]))
		{
			$ten=$_POST["ten_dang_nhap"];
			$mk=$_POST["mat_khau"];
			$this->luu_dang_nhap($ten,$mk);

		}
		if(isset($_SESSION["fullname"]) )
		{
			include("index.php");	
		}
		else
		{
			$_SESSION['error']="Thông tin đăng nhập không hợp lệ";
			header("location:index.php");	
		}
	}
	function thoat_dang_nhap()
	{
		session_destroy();
		header("location:.");	
	}
	function luu_dang_nhap($ten,$mk)
	{
		$m_user=new M_user();
		$user=$m_user->Doc_user_theo_tenDn_pass($ten,$mk);
		$_SESSION['fullname']=$user->fullname;
	}
		
}
?>