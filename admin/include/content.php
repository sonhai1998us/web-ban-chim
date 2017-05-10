<div class="content-box"><!-- Start Content Box -->
<?php 
if(isset($view))
{
	include("$view");
}
else
{
	include("views/home/v_chart.php");
}
?>
</div><!-- End .content-box -->