<?php
//error_reporting(E_ERROR);
ini_set("display_errors",1);
include("controllers/c_bai_viet.php");
$c_bai_viet=new C_bai_viet();
$c_bai_viet->Sua_bai_viet();
?>