<?php
error_reporting(E_ERROR);
include("controllers/c_hoa_don.php");
$c_hoa_don=new C_hoa_don();
$c_hoa_don->Hien_thi_chi_tiet_hoa_don();
?>