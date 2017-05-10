<script>
$(function() {
     var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	 var id=null;
	 if (pgurl=="") pgurl="." ;
     $("#main-nav li a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
		  {
			var title = $(this).attr("title");
			id=document.getElementById(title);
			$(this).addClass("current");
			$(id).addClass("current");	
		  }
		  
     })
		
	$(id).click();
	
});

</script> 
<ul id="main-nav">
  <!-- Accordion Menu -->
  
  <li> 
  <a href="quantri.php" class="nav-top-item no-submenu"> 
  <!-- Add the class "no-submenu" to menu items with no sub menu  -->
  Danh mục 
  </a> 
  </li>
  
  <li>
  <a href="#" class="nav-top-item" id="chimcanh"> Chim cảnh </a>
    <ul>
      <li><a href="chim_canh.php" title="chimcanh">Danh sách chim cảnh</a></li>
      <li><a href="themchimcanh.php" title="chimcanh">Thêm chim cảnh</a></li>
    </ul>
  </li>
  <li> 
  <a href="#" class="nav-top-item" id="loaichim"> Loại chim cảnh </a>
    <ul>
      <li><a href="loaichim.php" title="loaichim">Danh sách loại chim cảnh</a></li>
      <li><a href="themloaichim.php" title="loaichim" >Thêm loại chim cảnh</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="monan"> Bài viết </a>
    <ul>
      <li><a href="baiviet.php" title="monan">Danh sách bài viết</a></li>
      <li><a href="thembaiviet.php" title="monan">Thêm bài viết</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="user"> Bộ sưu tập </a>
    <ul>
      <li><a href="bosuutap.php" title="user">Danh sách bộ sưu tập</a></li>
      <li><a href="thembosuutap.php" title="user">Thêm bộ sưu tập</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="user"> User </a>
    <ul>
      <li><a href="user.php" title="user">Danh sách user</a></li>
      <li><a href="themuser.php" title="user">Thêm user</a></li>
    </ul>
  </li>
</ul>
<!-- End #main-nav -->