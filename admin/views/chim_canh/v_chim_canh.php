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
    <label>Nhập tên chim cảnh cần tìm:</label> 
    <input type="text" name="tim" class="text-input small-input" />&nbsp;
    <input class="button" type="submit" value="Tìm " name="btnTim" />
    </p>
    </form>
    </caption>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>Mã chim</th>
          <th>Tên chim</th>
          <th>Diễn giải</th>
          <th>Điện thoại</th>
          <th>Giá</th>
          <th>Trạng thái</th>
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
        foreach ($chim_canhs as $chim)
		{
		?>	
        <tr>
          <td><input type="checkbox" /></td>
          <td><?php echo $chim->ma_chim; ?></td>
          <td><a href="suachimcanh.php?ma_chim=<?php echo $chim->ma_chim; ?>" title="Edit">
		  <?php echo $chim->ten_chim ?></a></td>
          <td><?php echo $chim->dien_giai; ?></td>
          <td><?php echo $chim->dien_thoai; ?></td>
          <td><?php echo $chim->gia; ?></td>
          <td><?php echo $chim->trang_thai; ?></td>
          <td><!-- Icons --> 
            <a href="suachimcanh.php?ma_chim=<?php echo $chim->ma_chim; ?>" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javaScript:void(0)" title="Delete" onclick="Xoadulieu(<?php echo $chim->ma_chim ?>,'chim_canh','ma_chim')"> 
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
