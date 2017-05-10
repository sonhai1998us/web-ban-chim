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
    <label>Nhập tên người cần tìm:</label> 
    <input type="text" name="tim" class="text-input small-input" />&nbsp;
    <input class="button" type="submit" value="Tìm " name="btnTim" />
    </p>
    </form>
    </caption>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <!--`news_id`, `title`, `content_summary`, `content_detail`, `date_send`, `date_post`, `views`, `images`, `author`-->
          <th>ID</th>
          <th>Tên đăng nhập</th>
          <th>Tên đầy đủ</th>
          <th>Email</th>
          <th>Quyền hạn</th>
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
        foreach ($users as $u)
		{
		?>	
        <tr>
          <td><input type="checkbox" /></td>
          <td><?php echo $u->id; ?></td>
          <td><a href="suauser.php?id=<?php echo $u->id; ?>" title="Edit">
		  <?php echo $u->username ?></a></td>
          <td><?php echo $u->fullname; ?></td>
           <td><?php echo $u->email; ?></td>
          <td><?php echo $u->role; ?></td>
          <td><!-- Icons --> 
            <a href="suauser.php?id=<?php echo $u->id; ?>" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javaScript:void(0)" title="Delete" onclick="Xoadulieu(<?php echo $u->id ?>,'user','id')"> 
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
