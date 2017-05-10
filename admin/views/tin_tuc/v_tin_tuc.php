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
          <th>Mã tin</th>
          <th>Tiêu đề</th>
          <th width="100px" >Content Summary</th>
          <th>Ngày gửi</th>
          <th>Ngày cập nhật</th>
          <th>Hình</th>
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
        foreach ($newss as $n)
		{
		?>	
        <tr>
          <td><input type="checkbox" /></td>
          <td><?php echo $n->news_id; ?></td>
          <td><a href="suatintuc.php?news_id=<?php echo $n->news_id; ?>" title="Edit">
		  <?php echo $n->title ?></a></td>
          <td><?php echo $n->content_summary; ?></td>
          <td><?php echo $n->date_send; ?></td>
          <td><?php echo $n->date_post; ?></td>
          <td><?php echo $n->images; ?></td>
          <td><!-- Icons --> 
            <a href="suatintuc.php?news_id=<?php echo $n->news_id; ?>" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javaScript:void(0)" title="Delete" onclick="Xoadulieu(<?php echo $n->news_id ?>,'news','news_id')"> 
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
