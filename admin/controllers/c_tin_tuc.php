<?php
@session_start();
include ("models/m_tin_tuc.php");
include ("Pager.php");
class C_news
{
	function Hien_thi_news()
	{
			// Models
			$m_news=new M_news();
			$newss=$m_news->Doc_news();
			$gt="";
			if(isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
				$newss=$m_news->Doc_news($gt);
			}
			// Phân trang
			$p=new pager();
			$limit=6;
			$count=count($newss);
			$pages=$p->findPages($count,$limit);
			$vt=$p->findStart($limit);
			$curpage=$_GET["page"];
			$lst=$p->pageList($curpage,$pages);
			$newss=$m_news->Doc_news($gt,$vt,$limit);
			// View
			$title="Quản lý Tin Tức";
			$tieude="Danh sách tin Tức";
			$view="views/tin_tuc/v_tin_tuc.php";
			include("include/layout.php");	
	
	}

	function Them_news()
	{
			// Models
			$m_news=new M_news();
  //`news_id`, `title`, `content_summary`, `content_detail`, `date_send`, `date_post`, `views`, `images`, `author`
			if(isset($_POST["btnCapnhat"]))
			{
				$title=$_POST["title"];
				$content_summary=$_POST["content_summary"];
				$content_detail=$_POST["content_detail"];
				$date_send=$_POST["date_send"];
				
				$date_post=$_POST["date_post"];
				$views=$_POST["views"];
				$images=$_FILES["images"]["error"]==0?$_FILES["images"]["name"]:"";
				$author=$_POST["author"];
				$kq=$m_news->Them_news($title,$content_summary,$content_detail,$date_send,$date_post,$views,$images,$author);
				if($kq)
				{
					echo "<script>alert('Thêm tin tức mới thành công');window.location='tintuc.php' </script>";
				}
				else
				{
					echo "<script>alert('Thêm tin tức mới thất bại')</script>";	
				}
					
			}
			// View
			$title="Quản lý tin tức";
			$tieude="Thêm tin tức";
			
			
			$view="views/tin_tuc/v_Themtintuc.php";
			include("include/layout.php");	
	
	}
	function Sua_news()
	{
			// Models
		//`news_id`, `title`, `content_summary`, `content_detail`, `date_send`, `date_post`, `views`, `images`, `author`
			if(isset($_GET["news_id"]))
			{
				$news_id=$_GET["news_id"];
				// Models
				$m_news=new M_news();
				$news=$m_news->Doc_news_theo_news_id($news_id);
			}
			// Cập nhật
			if(isset($_POST["btnCapnhat"]))
			{
				$title=$_POST["title"];
				$content_summary=$_POST["content_summary"];
				$content_detail=$_POST["content_detail"];
				$date_send=$_POST["date_send"];
				$date_post=$_POST["date_post"];
				$views=$_POST["views"];
				$images=$_FILES[""]["error"]==0?$_FILES["images"]["name"]:"";
				$author=$_POST["author"];
				

				$kq=$m_news->Sua_news($title,$content_summary,$content_detail,$date_send,$date_post,$views,$images,$author,$news_id);
				if($kq)
				{
					if($_FILES["images"]["error"]==0)
					{
						// Di chuyển hình về server
						$kq=move_uploaded_file($_FILES["images"]["tmp_name"],"public/images/tintuc/$images");	
					}
					echo "<script>alert('Cập nhật tin tức thành công');window.location='tintuc.php' </script>";
				}
				else
				{
					echo "<script>alert('Cập nhật tin tức thất bại')</script>";	
				}
					
			}
			
			// View
			
			$title="Quản lý Tin Tức";
			$tieude="Sửa tin tức";
			$view="views/tin_tuc/v_Suatintuc.php";
			include("include/layout.php");
	
	}
}
?>