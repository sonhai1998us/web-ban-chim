<div class="content-box-header">
  <h3><?php echo $tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <!--`ma_loai`, `ten_loai`, `mo_ta`, `hinh`-->
        <form method="post" enctype="multipart/form-data">
        <fieldset>
          <p>
            <label>Tên chim cảnh</label>
            <input class="text-input small-input kiemtra" data_error="Nhập tên loại chim" type="text" id="ten_chim" name="ten_chim"  />
          </p>
          <p>
            <label>Nguồn gốc</label>
            <input class="text-input small-input kiemtra" data_error="Nhập nguồn gốc" type="text" id="nguon_goc" name="nguon_goc" />
          </p>          
          <p>
            <label>Giá</label>
            <input class="text-input small-input kiemtra" data_error="Nhập giá" type="text" id="gia" name="gia" />
          </p>
          <p>
            <textarea name="dien_giai" cols="50" rows="5" class="text-input large-input ckeditor" id="large-input">
            
            </textarea>
          </p>
          <p>
            <label>Điện thoại</label>
            <input class="text-input small-input kiemtra" data_error="Nhập sđt" type="text" id="dien_thoai" name="dien_thoai"/>
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
            <label>Khuyến mãi</label>
            <input class="text-input small-input kiemtra" data_error="Nhập khuyến mãi" type="text" id="khuyen_mai" name="khuyen_mai" />
          </p>  
          <p>
            <label>Ngày cập nhật</label>
            <input class="text-input small-input datepicker" type="text" id="ngay_cap_nhat" name="ngay_cap_nhat" />
          </p>
          <p>
            <label>Loại</label>
            <select name="loai">
              <?php
                foreach($chim_canhss as $chim)
                {
              ?>
              <option value="<?php echo $chim->ma_loai ?>"><?php echo $chim->ten_loai ?></option>
              <?php
                }
              ?>
            </select>
          </p>
          <p>
            <label>Trạng thái</label>
            <input class="text-input small-input kiemtra" type="text" id="trang_thai" name="trang_thai" />
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
