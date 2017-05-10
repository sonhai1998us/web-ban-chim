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
            <label>Tên loại</label>
            <input class="text-input small-input kiemtra" data_error="Nhập tên loại chim cảnh" type="text" id="ten_loai" name="ten_loai" />
          </p>
          <p>
            <label>Mã loại cha</label>
            <select name="ma_loai_cha">
            <?php
              foreach ($loai as $l)
              {
            ?>
              <option value="<?php echo $l->ma_loai_cha ?>"><?php echo $l->ten_loai ?></option>
            <?php
              }
            ?>
            </select>
          </p>
             <p>
            <label>Links</label>
            <input class="text-input small-input kiemtra" data_error="Nhập links của chim cảnh" type="text" id="links" name="links" />
          </p>
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='loaichim.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>
