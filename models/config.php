<?php

//dùng local
define("DB_HOST","localhost");
define("DB_NAME","db_chim_canh");
define("DB_USER","root");
define("DB_PWD","");

$currency			= ' đ'; //currency symbol
$shipping_cost		= 0; //shipping cost
$taxes				= array( //List your Taxes percent here.
							'VAT' => 0, 
							'Thuế dịch vụ' => 0,
							'Phí vận chuyển' => 0
							);
//dùng trên byethost
/*define("DB_HOST","sql206.byethost17.com");
define("DB_NAME","b17_18650311_db_chim_canh");
define("DB_USER","b17_18650311");
define("DB_PWD","0908953765");*/
?>