<?php
@session_start();
include_once("models/m_user.php");
include ("Pager.php");
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
			$title="Quản lý cửa hàng chim cảnh";
			include("include/layout.php");	
		}
		else
		{
			$_SESSION['error']="Thông tin đăng nhập không hợp lệ";
			header("location:login.php");	
		}
	}
	function thoat_dang_nhap()
	{
		session_destroy();
		header("location:login.php");	
	}
	function luu_dang_nhap($ten,$mk)
	{
		$m_user=new M_user();
		$user=$m_user->Doc_user_theo_tenDn_pass($ten,$mk);
		$_SESSION['fullname']=$user->fullname;
	}
	function Hien_thi_user($tim="",$vt=-1,$limit=-1)
    {
		// Models
			$m_user=new M_user();
			$users=$m_user->Doc_user();
			$gt="";
			if(isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
				$users=$m_user->Doc_user($gt);
			}
			// Phân trang
			$p=new pager();
			$limit=6;
			$count=count($users);
			$pages=$p->findPages($count,$limit);
			$vt=$p->findStart($limit);
			$curpage=$_GET["page"];
			$lst=$p->pageList($curpage,$pages);
			$users=$m_user->Doc_user($gt,$vt,$limit);
			// View
			$title="Quản lý user";
			$tieude="Danh sách user";
			$view="views/user/v_user.php";
			include("include/layout.php");	
    }

	function Them_user()
	{
			// Models
			$m_user=new M_user();
  //`id`, `username`, `password`, `fullname`, `birthdate`, `gender`, `address`, `email`, `identitycard`, `mobiphone`, `role`
			if(isset($_POST["btnCapnhat"]))
			{
				$username=$_POST["username"];
				$password=$_POST["password"];
				$fullname=$_POST["fullname"];
				$birthdate=$_POST["birthdate"];
				$gender=$_POST["gender"];
				$address=$_POST["email"];
				$email=$_POST["address"];
				$identitycard=$_POST["identitycard"];
				$mobiphone=$_POST["mobiphone"];
				$role=$_POST["role"];

				$kq=$m_user->Them_user($username,$password,$fullname,$birthdate,$gender,$address,$email,$identitycard,$mobiphone,$role);
				if($kq)
				{
					echo "<script>alert('Thêm user mới thành công');window.location='user.php' </script>";
				}
				else
				{
					echo "<script>alert('Thêm user mới thất bại')</script>";	
				}
					
			}
			// View
			$title="Quản lý user";
			$tieude="Thêm user";
			
			
			$view="views/user/v_Themuser.php";
			include("include/layout.php");	
	
	}
		
	function Sua_user()
	{
		if(isset($_GET["id"]))
		{
			$id=$_GET["id"];
			$m_user = new M_user();
			$user = $m_user->Doc_user_theo_id($id);
		}
		if(isset($_POST["btnCapnhat"]))
			{
				$username=$_POST["username"];
				$password=$_POST["password"];
				$fullname=$_POST["fullname"];
				$birthdate=$_POST["birthdate"];
				$gender=$_POST["gender"];
				$address=$_POST["email"];
				$email=$_POST["address"];
				$identitycard=$_POST["identitycard"];
				$mobiphone=$_POST["mobiphone"];
				$role=$_POST["role"];

				$kq=$m_user->Sua_user($username,$password,$fullname,$birthdate,$gender,$address,$email,$identitycard,$mobiphone,$role,$id);
				if($kq)
				{
					echo "<script> alert ('Cập nhật user thành công'); window.location='user.php'</script>";
				}
				else
				{
					echo "<script> alert ('Cập nhật user không thành công');</script>";
				}
			}
			$title="Quản lý User";
			$tieude="Sửa User";
			$view="views/user/v_Suauser.php";
			include("include/layout.php");
	}
}
?>