<?php
//
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
		"Chi Siamo"=>"who.php",
		"News"=>"news.php",
		"Eventi"=>"event.php",
		"Galleria"=>"gallery.php",
		"Contattaci"=>"contact.php",
	);
	//
	echo "	<!DOCTYPE html>
		<html>
		
		<head>
		<title>Olio Quadrone</title>
		<link rel=\"stylesheet\" href=\"css/style.css\">
		<script src='https://www.google.com/recaptcha/api.js'></script>
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
	/*echo			"</div>
			</div>
			
			<div class=\"div-menu-image-top\">
				<img src=\"image/cucchiaio.jpg\"/>
			</div>
			
			<div class=\"div-menu-image-bottom\">
				<img src=\"image/bicchiere.jpg\"/>
			</div>";*/
	echo "	</div>";
}

function addFooter(){
	echo "
		</body>
		
		</html>";
}

function addInfo(){
	//
	if($_POST["g-recaptcha-response"] && $_POST["email"]){
		//
		$mail = new PHPMailer(true);
		//
		$mail->IsSMTP(); // telling the class to use SMTP
		$mail->SMTPAuth = true; // enable SMTP authentication
		$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
		$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
		$mail->Port = 465; // set the SMTP port for the GMAIL server
		$mail->Username = "aldo.rotunno@gmail.com"; // GMAIL username
		$mail->Password = "ghepardo"; // GMAIL password
		//
		//Typical mail data
		$mail->AddAddress("rotunno.aldo@gmail.com", "Aldo");
		$mail->SetFrom("info@quadrone.it","OLIO");
		$mail->Subject = "[ OLIO QUADRONE ]";
		$mail->Body = "La mail ".$_POST["email"]." ha richiesto informazioni sull'olio";
		//
		$mail->Send();
	}
	//
	echo "	<div class=\"div-info\">
			Psst... Saremo presto OnLine</br>Lasciaci la tua mail per rimanere aggiornato...
			
			<div id=\"completeform\">
				
				<form id=\"inviteform\" name=\"inviteform\" method=\"post\" action=\"#\">
					<input type=\"email\" name=\"email\" id=\"email\" placeholder=\"Scrivi il tuo indirizzo E-mail\" autocomplete=\"off\" autocorrect=\"off\" autocapitalize=\"off\">
					
					<div id=\"captcha\" class=\"g-recaptcha\" data-sitekey=\"6Lc7pw0TAAAAAFwzuXRMJG3LnvEaYt7NUPZwnc-a\"></div>
					
					<div id=\"btnwrap\">
						<button name=\"btnSend\" id=\"btnSend\" type=\"submit\" value=\"true\">Conferma</button>
					</div>
					
				</form>
				
			</div>
			
		</div>";
}


?>
