<?php
require_once('database.php');
class M_user extends database
{
	
	function Doc_user($tim="",$vt=-1,$limit=-1)
    {
		$dk="";
		if($tim!="")
		{
			$dk = "where fullname like '% $tim%' or fullname like '%$tim %'";
		}
		$sql = "Select * from user ". $dk ." order by id desc";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
			
	function Doc_user_theo_tenDn_pass($ten,$mk)
	{
		$sql="select * from user where username=? and password=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ten,md5($mk)));	
	}	
//id, username, password, fullname, birthdate, gender, address, email, identitycard, mobiphone, role

	function Doc_user_theo_id($id)
	{
		$sql="select * from user where id=?";
		$this->setQuery($sql);
		return $this->loadRow(array($id));	
	}
	function Them_user($username,$password,$fullname,$birthdate,$gender,$address,$email,$identitycard,$mobiphone,$role)
	   {
		  $sql="insert into user values(?,?,?,?,?,?,?,?,?,?,?)";
		  $this->setQuery($sql);
		  return $this->execute(array(NULL,$username,$password,$fullname,$birthdate,$gender,$address,$email,$identitycard,$mobiphone,$role));
	   }
	 
	function Sua_user($username,$password,$fullname,$birthdate,$gender,$address,$email,$identitycard,$mobiphone,$role,$id)
	   {
		  $sql="update user set username=?,password=?,fullname=?,birthdate=?,gender=?,address=?,email=?,identitycard=?,mobiphone=?,role=? Where id=?";
		  $this->setQuery($sql);
		  return $this->execute(array($username,$password,$fullname,$birthdate,$gender,$address,$email,$identitycard,$mobiphone,$role,$id));
	   }

	function Xoa_user($id)
	   {
		   $sql="delete from user where id=?";
		   $this->setQuery($sql);
		   return $this->execute(array($id));
	   }
}
?>