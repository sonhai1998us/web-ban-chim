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
    <label>Nhập tiêu đề bài viết cần tìm:</label> 
    <input type="text" name="tim" class="text-input small-input" />&nbsp;
    <input class="button" type="submit" value="Tìm " name="btnTim" />
    </p>
    </form>
    </caption>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>Mã bài viết</th>
          <th width="200px">Tiêu đề</th>
          <th width="200px">Nội dung tóm tắt</th>
          <th width="200px">Nội dung chi tiết</th>
          <th>Ngày xuất bản</th>
          <th>Xuất bản</th>
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
        foreach ($bai_viets as $bai)
		{
		?>	
        <tr>
          <td><input type="checkbox" /></td>
          <td><?php echo $bai->ma_bai_viet; ?></td>
          <td><a href="suabaiviet.php?ma_bai_viet=<?php echo $bai->ma_bai_viet; ?>" title="Edit">
		  <?php echo $bai->tieu_de ?></a></td>
          <td><?php echo $bai->noi_dung_tom_tat; ?></td>
          <td><?php echo $bai->noi_dung_chi_tiet; ?></td>
          <td><?php echo $bai->ngay_xuat_ban; ?></td>
          <td><?php echo $bai->xuat_ban; ?></td>
          <td><!-- Icons --> 
            <a href="suabaiviet.php?ma_bai_viet=<?php echo $bai->ma_bai_viet; ?>" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javaScript:void(0)" title="Delete" onclick="Xoadulieu(<?php echo $bai->ma_bai_viet ?>,'bai_viet','ma_bai_viet')"> 
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
