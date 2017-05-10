<?php
include("includes/header_sli.php");

include("includes/banner_top.php");


?>
<br>
<!-- gallery -->
	<div class="gallery-top" align="center">
		<!-- container -->
		<div class="container">
			<div class="gallery-info">
				<h3>Bộ sưu tập</h3>
				<p class="caption">Đây là nơi trưng bày bộ sưu tập các hình ảnh đẹp</p>
			</div>
            
            
			<div class="gallery-grids-top">
				<div class="gallery-grids">
					<?php
                    foreach($anh_deps as $anh)
					{
					?>
					<div class="col-md-3 product-men gallery-grid yes-marg">
						<a class="example-image-link" href="images/hinh/<?php echo $anh->hinh?>" data-lightbox="example-set" data-title=""><img class="example-image" src="images/hinh/<?php echo $anh->hinh?>"" alt=""/></a>
					</div>
                    <?php
					}
					?>
				<div class="clearfix"> </div>
				</div>
			
				<script src="js/lightbox-plus-jquery.min.js"></script>
			</div>
            
            
		</div>
        
        
        
        
	</div>
     <div class="clearfix"></div>
         
	<!-- //gallery -->

 


<?php
//include("includes/huong_dan.php");
include("includes/footer.php");
include("includes/login.php");
?>

