<?php
require_once ('database.php');
class M_news extends database
{
    // Quản trị

	public function Doc_news($tim="",$vt=-1,$limit=-1)
    {
		$dk="";
		if($tim!="")
		{
			$dk = "where title like '% $tim%' or title like '%$tim %'";
		}
		$sql = "Select * from news ". $dk ." order by news_id desc";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
	
    public function Doc_news_theo_news_id($news_id)
    {
        $sql = "Select * from news where news_id =?";
        $this->setQuery($sql);
        return $this->loadRow(array($news_id));
    }
    //`news_id`, `title`, `content_summary`, `content_detail`, `date_send`, `date_post`, `views`, `images`, `author`
	public function Them_news($title,$content_summary,$content_detail,$date_send,$date_post,$views,$images,$author)
	   {
		  $sql="insert into news values(?,?,?,?,?,?,?,?,?)";
		  $this->setQuery($sql);
		  return $this->execute(array(NULL,$title,$content_summary,$content_detail,$date_send,$date_post,$views,$images,$author));
	   }
	 
	 public function Sua_news($title,$content_summary,$content_detail,$date_send,$date_post,$views,$images,$author,$news_id)
	   {
		  $sql="update news set title=?,content_summary=?,content_detail=?,date_send=?,date_post=?,views=?,images=?,author=? Where news_id=?";
		  $this->setQuery($sql);
		  return $this->execute(array($title,$content_summary,$content_detail,$date_send,$date_post,$views,$images,$author,$news_id));
	   }
	   public function Xoa_news($news_id)
	   {
		   $sql="delete from news where news_id=?";
		   $this->setQuery($sql);
		   return $this->execute(array($news_id));
	   }
}

  //`news_id`, `ten_chim`, `nguon_goc`, `gia`, `dien_giai`, `dien_thoai`, `hinh`, `hinh_nho`, `khuyen_mai`, `ngay_cap_nhat`, `loai`, trang_thai 
?>
