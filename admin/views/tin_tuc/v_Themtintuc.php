<div class="content-box-header">
  <h3><?php echo $tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <!--`news_id`, `title`, `content_summary`, `content_detail`, `date_send`, `date_post`, `views`, `images`, `author`-->
        <form method="post" enctype="multipart/form-data">
        <fieldset>
          <p>
            <label>Title</label>
            <input class="text-input small-input kiemtra" data_error="Nhập tên tiêu đề" type="text" id="title" name="title"  />
          </p>
          <p>
            <label>Content Summary</label>
            <textarea name="content_summary" cols="50" rows="5" class="text-input large-input ckeditor" id="large-input">
            
            </textarea>
          </p>          
          <p>
            <label>Content Detail</label>
            <textarea name="content_detail" cols="50" rows="5" class="text-input large-input ckeditor" id="large-input">
            
            </textarea>
          </p>
          <p>
            <label>Ngày gửi</label>
            <input class="text-input small-input datepicker" type="text" id="date_send" name="date_send" />
          </p>
          <p>
            <label>Ngày cập nhật</label>
            <input class="text-input small-input datepicker" type="text" id="date_post" name="date_post" />
          </p>
          <p>
            <label>Lượt xem</label>
            <input class="text-input small-input" data_error="Nhập lượt xem" type="text" id="views" name="views"/>
          </p>
          <p>
            <label>Chọn hình tin tức</label>
            <input type="file" name="images" id="hinh" />
            <div class="image-holder" id="image-holder"></div>
          <p>
          <p>
            <label>Tác giả</label>
            <input class="text-input small-input kiemtra" data_error="Nhập tác giả" type="text" id="author" name="author" />
          </p>  
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='tintuc.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>
