<div class="content-box-header">
  <h3><?php echo $tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <!--`id`, `username`, `password`, `fullname`, `birthdate`, `gender`, `address`, `email`, `identitycard`, `mobiphone`, `role`-->
    <form method="post" enctype="multipart/form-data">
        <fieldset>
           <p>
            <label>Tên đăng nhập</label>
            <input class="text-input small-input kiemtra" data_error="Nhập tên đăng nhập" type="text" id="username" name="username" value="<?php echo $user->username ?>" />
          </p>
          
          
          <p>
            <label>Mật khẩu</label>
            <input  class="text-input small-input kiemtra" data_error="Nhập mật khẩu" type="password" id="password" name="password" value="<?php echo $user->password ?>"/>
          </p>
          <p>
            <label>Tên đầy đủ</label>
            <input class="text-input small-input kiemtra" data_error="Nhập tên đẩy đủ" type="text" id="fullname" name="fullname" value="<?php echo $user->fullname ?>" />
          </p>
          <p>
            <label>Ngày sinh</label>
            <input class="text-input small-input datepicker" type="text" id="birthdate" name="birthdate" value="<?php echo $user->birthdate ?>" />
          </p>
          <p>
            <label>Giới tính</label>
            <input class="text-input small-input kiemtra" data_error="Nhập giới tính" type="text" id="gender" name="gender" value="<?php echo $user->gender ?>" />
          </p>
          <p>
            <label>Địa chỉ</label>
            <input class="text-input small-input kiemtra" data_error="Nhập địa chỉ" type="text" id="address" name="address" value="<?php echo $user->address ?>" />
          </p>
          <p>
            <label>Email</label>
            <input class="text-input small-input kiemtra" data_error="Nhập email" type="text" id="email" name="email" value="<?php echo $user->email ?>" />
          </p>

          <p>
            <label>Chứng minh nhân dân</label>
            <input class="text-input small-input kiemtra" data_error="Nhập chứng minh nhân dân" type="text" id="identitycard" name="identitycard" value="<?php echo $user->identitycard ?>" />
          </p>  
          <p>
            <label>Điện thoại</label>
            <input class="text-input small-input kiemtra" data_error="Nhập số diện thoại" type="text" id="mobiphone" name="mobiphone" value="<?php echo $user->mobiphone ?>" />
          </p> 
          <p>
            <label>Quyền hạn</label>
            <input class="text-input small-input kiemtra" data_error="Nhập quyền hạn" type="text" id="role" name="role" value="<?php echo $user->role ?>" />
          </p> 
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='user.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>
