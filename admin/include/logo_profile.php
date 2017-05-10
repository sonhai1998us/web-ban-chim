<?php
@session_start();
?>
<a href="quantri.php"> <!-- Histats.com  (div with counter) --><div align="center" id="histats_counter"></div>
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,3621247,4,432,112,75,00011111']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?3621247&101" alt="" border="0"></a></noscript>
<!-- Histats.com  END  --></a> 
<!-- Sidebar Profile links -->
<div id="profile-links"> Chào, <a href="#" title="Edit your profile">
<?php echo $_SESSION["fullname"] ?>
</a><br />
  <br />
  <a href="../." title="View the Site">View the Site</a> | 
  <a href="quantri.php?func=exit" title="Sign Out">Sign Out</a> </div>
