<?php
include("models/m_hoa_don.php");
$m_hoa_don=new M_hoa_don();
$dem=$m_hoa_don->Tong_don_hang();
echo "Có $dem hóa đơn chưa thanh toán";
?>	