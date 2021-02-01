<!DOCTYPE html>
<html lang="en">
<head>
	<title>Homepage</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	




	
	<div class="bg-contact2" style="background-image: url('images/BG2.png');">
		<div class="container-contact2">
	
			<div class="wrap-contact2">
					
<?php 

$message = $_GET["message"];
$name=$_GET["name"];
$simple_string = $_GET["password"]; 
$ciphering = "AES-128-CTR"; 
  
$iv_length = openssl_cipher_iv_length($ciphering); 
$options = 0; 
  
$encryption_iv = '1234567891011121'; 
  
$encryption_key = "GeeksforGeeks"; 
  
$encryption = openssl_encrypt($simple_string, $ciphering, 
            $encryption_key, $options, $encryption_iv); 
  
$decryption_iv = '1234567891011121'; 

  
$decryption_key = "GeeksforGeeks"; 
  
$decryption=openssl_decrypt ($encryption, $ciphering,  
        $decryption_key, $options, $decryption_iv); 


$encryption_mes = openssl_encrypt($message, $ciphering, 
            $encryption_key, $options, $encryption_iv); 
$decryption_mes=openssl_decrypt ($encryption_mes, $ciphering,  
        $decryption_key, $options, $decryption_iv); 

echo "<center><h1> Hello <b>".$name."</b></h1><br> Encrypted Password <b> <font color=red>	".$encryption."</font></b><br> decrypted Password is <b><font color=blue>".$decryption."</font></b><br> Your Encrpted message <b><font color=red> ".$encryption_mes."</b></font><br> Your decrypted message<font color=blue><b> ".$decryption_mes."</b></font></center>";

?> 

					</div>
				
			
		</div>

	</div>


</body>
</html>
