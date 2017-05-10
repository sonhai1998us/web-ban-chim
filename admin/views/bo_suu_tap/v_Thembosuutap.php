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
            <label>Tên</label>
            <input class="text-input small-input kiemtra" data_error="Nhập tên ten" type="text" id="ten" name="ten"  />
          </p>   
          <p>
            <label>Chọn hình </label>
            <input type="file" name="hinh" id="hinh" />
            <div class="image-holder" id="image-holder"></div>
          </p>
          <p>
            <label>Ngày đăng</label>
            <input class="text-input small-input datepicker" type="text" id="ngay_dang" name="ngay_dang" />
          </p>
          <p>
            <label>Mã người dùng</label>
            <input class="text-input small-input kiemtra" data_error="Nhập mã người dùng" type="text" id="ma_nguoi_dung" name="ma_nguoi_dung" />
          </p>
          <p>
            <label>Nội dung</label>
            <textarea name="noi_dung" cols="50" rows="5" class="text-input large-input ckeditor" id="large-input">
            </textarea>
          </p>
          <p>
            <label>Người cung cấp</label>
            <input class="text-input small-input kiemtra" data_error="Nhập người cung cấp" type="text" id="nguoi_cung_cap" name="nguoi_cung_cap" />
          </p>  
 
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='bosuutap.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>
