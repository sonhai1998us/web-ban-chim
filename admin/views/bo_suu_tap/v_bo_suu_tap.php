<div class="content-box-header">
  <h3><?php echo $tieude ?><label id="kqXoa"></label></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <table>
    <caption>
    <form method="post">
    <p>
    <label>Nhập tiêu đề cảnh cần tìm:</label> 
    <input type="text" name="tim" class="text-input small-input" />&nbsp;
    <input class="button" type="submit" value="Tìm " name="btnTim" />
    </p>
    </form>
    </caption>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <!--`news_id`, `title`, `content_summary`, `content_detail`, `date_send`, `date_post`, `views`, `images`, `author`-->
          <th>Mã</th>
          <th>Tên</th>
          <th >Hình</th>
          <th>Ngày đăng</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="6">
            <div class="pagination"> <?php echo $lst; ?> </div>
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        <?php
        foreach ($bo_suu_taps as $b)
		{
		?>	
        <tr>
          <td><input type="checkbox" /></td>
          <td><?php echo $b->ma; ?></td>
          <td><a href="suabosuutap.php?ma=<?php echo $b->ma; ?>" title="Edit">
		  <?php echo $b->ten ?></a></td>
          <td><?php echo $b->hinh; ?></td>
          <td><?php echo $b->ngay_dang; ?></td>
          <td><!-- Icons --> 
            <a href="suabosuutap.php?ma=<?php echo $b->ma; ?>" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javaScript:void(0)" title="Delete" onclick="Xoadulieu(<?php echo $b->ma ?>,'anh_dep','ma')"> 
            <img src="public/layout/resources/images/icons/cross.png" alt="Delete" />
            </a>
            </td>
        </tr>
        <?php
		}
		?>
      </tbody>
    </table>
   
  </div>
  
</div>
