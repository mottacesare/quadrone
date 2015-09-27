<?php

if(!function_exists("pr") && !function_exists("pre")) { 
	//print formatted array
	function pr($str){
		echo "<pre>";
		print_r($str);
		echo "</pre>";
	}
	//print formatted array and exit
	function pre($str){
		pr($str);
		exit(0);
	}
}

function addHeader($page){
	$page_arr=array(
		"Home"=>"index.php",
		"Chi Siamo"=>"chi_siamo.php",
		"News"=>"news.php",
		"Eventi"=>"eventi.php",
		"Galleria"=>"galleria.php",
		"Contattaci"=>"contattaci.php",
	);
	//
	echo "	<!DOCTYPE html>
		<html>
		
		<head>
		<title>Olio Quadrone</title>
		<link rel=\"stylesheet\" href=\"css/style.css\">
		</head>
		
		<body style=\"width:100%;\">
		<div style=\"width:100%;height:100%;\">
			<div class=\"div-menu\">
				<div class=\"div-menu-logo\">
					<img src=\"image/logo.png\"/>
				</div>
				
				<div class=\"div-menu-title\">
				</div>
				
				<div class=\"div-menu-container\">";
	//
	foreach($page_arr as $pa_k=>$pa_v){
		echo "			<a href=\"$pa_v\"><div class=\"div-menu-item ".($pa_v==$page?"div-menu-item-selected":"")."\">$pa_k</div></a>";
	}
	//
	echo			"</div>
			</div>
			
			<div class=\"div-menu-image-top\">
				<img src=\"image/cucchiaio.jpg\"/>
			</div>
			
			<div class=\"div-menu-image-bottom\">
				<img src=\"image/bicchiere.jpg\"/>
			</div>";
}

function addFooter(){
	echo "	</div>
		</body>
		
		</html>";
}

?>