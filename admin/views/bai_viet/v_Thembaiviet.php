<div class="content-box-header">
  <h3><?php echo $tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <!--ma_loai, ten_loai, mo_ta, hinh-->
        <form method="post" enctype="multipart/form-data">
        <fieldset>
          <p>
          <!--ma_bai_viet, ma_loai_bai_viet, ma_nguoi_dung, tieu_de, noi_dung_tom_tat, noi_dung_chi_tiet, hinh, hinh_nho, ngay_gui_bai, ngay_xuat_ban, ngay_het_han, so_lan_xem, xuat_ban -->
            <!--label>Mã loại bài viết</label>
            <input class="text-input small-input kiemtra" data_error="Nhập mã loại bài viết" type="text" id="ma_loai_bai_viet" name="ma_loai_bai_viet"  /-->
          </p>
          <p>
            <label>Mã người dùng</label>
            <input class="text-input small-input kiemtra" data_error="Nhập mã người dùng" type="text" id="ma_nguoi_dung" name="ma_nguoi_dung" />
          </p>          
          <p>
            <label>Tiêu đề</label>
            <input class="text-input small-input kiemtra" data_error="Nhập tiêu đề" type="text" id="tieu_de" name="tieu_de" />
          </p>
          <p>
          	<label>Nội dung tóm tắt</label>
            <textarea name="noi_dung_tom_tat" cols="50" rows="5" class="text-input large-input ckeditor" id="large-input">
            </textarea>
          </p>
          <p>
          	<label>Nội dung chi tiết</label>
            <textarea name="noi_dung_chi_tiet" cols="50" rows="5" class="text-input large-input ckeditor" id="large-input">
            </textarea>
          </p>
          <p>
            <label>Chọn hình sản phẩm</label>
            <input type="file" name="hinh" id="hinh" />
            <div class="image-holder" id="image-holder"></div>
          <p>
          <p>
            <label>Chọn hình nhỏ</label>
            <input type="file" name="hinh_nho" id="hinh_nho" />
            <div class="image-holder" id="image-holder-nho"></div>
          <p>
          <p>
            <label>Ngày gửi bài</label>
            <input class="text-input small-input datepicker" type="text" id="ngay_gui_bai" name="ngay_gui_bai" />
          </p>
          <p>
            <label>Ngày xuất bản</label>
            <input class="text-input small-input datepicker" type="text" id="ngay_xuat_ban" name="ngay_xuat_ban" />
          </p>
          <p>
            <label>Ngày hết hạn</label>
            <input class="text-input small-input datepicker" type="text" id="ngay_het_han" name="ngay_het_han" />
          </p>
          <p>
          	<label>Số lần xem</label>
             <input class="text-input small-input"  type="text" id="so_lan_xem" name="so_lan_xem" />
          </p>
          <p>
          	<label>Xuất bản</label>
             <input class="text-input small-input"  type="text" id="xuat_ban" name="xuat_ban" />
          </p>       
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='chim_canh.php'" />
          </p>
             
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>
