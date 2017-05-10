<?php
require_once("database.php");
class M_anh_dep extends database
{
		//Đọc tất cả ảnh đẹp
		public function Doc_anh_dep($vt=-1,$limit=-1)
		{
			$sql="select * from anh_dep";
			if($vt>=0 && $limit>0)
			{
				$sql.=" limit $vt,$limit";
			}
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
}

/*$m_anh_dep=new M_anh_dep();
$anh_deps=$m_anh_dep->Doc_anh_dep(0,8);
echo count($anh_deps);*/
?>