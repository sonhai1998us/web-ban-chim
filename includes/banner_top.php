<?php
require("models/m_loai_chim_canh.php");
$m_loai_chim_canh=new M_loai_chim_canh();
$menus=$m_loai_chim_canh->Menu_Loai_chim();

$m_loai_pk=new M_loai_chim_canh();
$menus_pk=$m_loai_chim_canh->Menu_Loai_pk();
?>
<!-- Cart item-->
<div style="width:350px;float:right;position:relative;top:-31px">
    <a href="#" class="cart-box" id="cart-info" title="View Cart">
    <?php 
            if(isset($_SESSION["products"])){
                echo count($_SESSION["products"]); 
            }else{
                echo 0; 
            }
            ?>
    </a>
    <div class="shopping-cart-box">
            <a href="#" class="close-shopping-cart-box" >Close</a>
            <h3 style="font-size:14px !important">Giỏ hàng của bạn</h3> 
            <div id="shopping-cart-results"></div>
    </div>
</div>
<div style="clear:both"></div>
<!-- End Cart item--> 

<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">

            
            
            <nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href=".">Trang chủ <span class="sr-only">(current)</span></a></li>
                    
                   
                    <li class="dropdown menu__item">
						<a href="chim.php" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Chim cảnh <span class="caret"></span></a>
                       
							<ul class="dropdown-menu multi-column columns-3">
                             		
								<div class="row">
                                
									<div class="col-sm-8 multi-gd-img1 multi-gd-text ">
                                    
										<a href="chim.php"><img src="images/1000x675/1363870757chao_mao7.jpg" alt=" "/></a>
									</div>
                                     
                                     <div class="col-sm-4 multi-gd-img" align="left">              
                                   <?php
										foreach($menus as $cha)
										{
									?>
                                            <ul class="multi-column-dropdown">
                                                <?php
                                                    foreach($cha->items as $con) 
                                                    {	
                                                ?>
                                                       <li><a href="product.php?ma_loai=<?php echo $con->ma_loai?>"><?php echo $con->ten_loai ?></a></li> 
                                                <?php
                                                        }
                                                ?>
                                            </ul>
                                       <?php
										
											}
									?>
									</div>
								</div>
                                 
							</ul>
                            
					</li>
					
                    
                    
                    
                    
                    
                    
                    <li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Phụ kiện <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-8 multi-gd-img1 multi-gd-text ">
										<a href="phu_kien.php"><img src="images/1000x675/nghe_thuat_NT02.jpg" alt=" "/></a>
									</div>
								  <div class="col-sm-4 multi-gd-img" align="left">              
                                   <?php
										foreach($menus_pk as $cha)
										{
									?>
                                            <ul class="multi-column-dropdown">
                                                <?php
                                                    foreach($cha->items as $con) 
                                                    {	
                                                ?>
                                                       <li><a href="product.php?ma_loai=<?php echo $con->ma_loai?>"><?php echo $con->ten_loai ?></a></li> 
                                                <?php
                                                        }
                                                ?>
                                            </ul>
                                       <?php
										
											}
									?>
									</div>
									
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
                   
					<li class="dropdown menu__item">
						<a href="contact.php" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Liên hệ <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
                                <div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown"  style="color:#F00; font:bold">
                                        	<li style="color:#F00; font:bold"><a href="Lienhe.php">Thông tin liên hệ</a></li>
											<li style="color:#F00; font:bold"><a href="showroom.php">Danh sách Showroom</a></li>
										</ul>
									</div>
									<div style="float:left">
                                    <h3 class="tittle">Xem trên bản đồ</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.523696438994!2d106.67064321420395!3d10.771143962237929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ede519d831f%3A0x7661a52ab8497b65!2zMzU3IEzDqiBI4buTbmcgUGhvbmcsIFBoxrDhu51uZyAxMCwgUXXhuq1uIDEwLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1472962472420" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
            
            
							
				  </ul>
                  
                   <li class="menu__item"><a class="menu__link" href="tin_tuc.php">Tin tức </a></li>
                    <li class="menu__item"><a class="menu__link" href="album.php">Bộ sưu tập </a></li>
                    

                    
                    
				</div>
			  </div>
              
			</nav>	
		</div>
   
        
<div class="clearfix"></div>
	</div>
</div>