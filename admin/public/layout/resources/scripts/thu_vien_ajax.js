// JavaScript Document
function dhTong()
{
	var xmlhttp=null;
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
		
	}
	else
	{
	  // IE5, IE6
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  
	}	
	// b2: Mở kết nối đến máy chủ (server) POST
	xmlhttp.open("GET","xl_don_hang.php",true);
	// b3: Gọi phương thức khi máy chủ thi hành xong
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200) // hoàn thành va tìm thấy trang 
		{
			document.getElementById("countDH").innerHTML=xmlhttp.responseText;
		}
	}

	// b4 Gởi thông tin POST
	//var data = new FormData();
	//data.append('ma_tin_tuc',ma_tin_tuc);
	xmlhttp.send();	
}


function tin_tuc(ma_tin_tuc)
{
	
	
	// ajax
	
	// b1: Tạo đối tượng ajax
	var xmlhttp=null;
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
		
	}
	else
	{
	  // IE5, IE6
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  
	}	
	// b2: Mở kết nối đến máy chủ (server) POST
	xmlhttp.open("POST","xl_tin_tuc.php",true);
	// b3: Gọi phương thức khi máy chủ thi hành xong
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200) // hoàn thành va tìm thấy trang 
		{
			document.getElementById("noidung").innerHTML=xmlhttp.responseText;
		}
	}

	// b4 Gởi thông tin POST
	var data = new FormData();
	data.append('ma_tin_tuc',ma_tin_tuc);
	xmlhttp.send(data);

}

