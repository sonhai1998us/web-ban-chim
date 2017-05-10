<div class="content-box-header">
  <h3><?php echo $tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <!--``news_id`, `title`, `content_summary`, `content_detail`, `date_send`, `date_post`, `views`, `images`, `author` -->
    <form method="post" enctype="multipart/form-data">
        <fieldset>
          <p>
            <label>Title</label>
            <input class="text-input small-input kiemtra" data_error="Nhập tiêu đề" type="text" id="title" name="title" value="<?php echo $news->title ?>" />
          </p>
          <p>
            <label>Content Summary</label>
            <input class="text-input small-input kiemtra" data_error="Nhập nội dung" type="text" id="content_summary" name="content_summary" value="<?php echo $news->content_summary ?>" />
          </p>          
          <p>
            <label>Content Detail</label>
            <input class="text-input small-input kiemtra" data_error="Nhập giá" type="text" id="content_detail" name="content_detail" value="<?php echo $news->content_detail ?>" />
          </p>
          
          <p>
            <label>Ngày gửi</label>
            <input class="text-input small-input datepicker" type="text" id="date_send" name="date_send" value="<?php echo $news->date_send ?>" />
          </p>

          <p>
            <label>Ngày cập nhật</label>
            <input class="text-input small-input datepicker" type="text" id="date_post" name="date_post" value="<?php echo $news->date_post ?>" />
          </p>

          <p>
            <label>Views</label>
            <input class="text-input small-input kiemtra" data_error="Nhập sđt" type="text" id="views" name="views" value="<?php echo $news->views ?>" />
          </p>
          <p>
            <label>Chọn hình tin tức</label>
            <input type="file" name="images" id="images"  />
            <div class="image-holder" id="image-holder"></div>
            <?php
                if($news->images!="")
                {
            ?>
                 <img src="../images/tintuc/<?php echo $news->hinh; ?>"  width="180px" height="150px" />
            <?php
                }
             ?>
          </p>

          <p>
            <label>Tác giả</label>
            <input class="text-input small-input kiemtra" type="text" data_erroe="Nhập tác giả" id="author" name="author" value="<?php echo $news->author ?>" />
          </p>
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='news.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>
