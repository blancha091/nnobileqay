<?php

session_start();

$mpay=$_POST["mpay"];


$rand=rand(1000000,999999999).rand(1000000,999999999);
$rand2=base64_encode($rand);
	

        $_SESSION['mpay'] = $mpay;



header("location:login.php?vc?__event=card&service_id=top_card=IL")
?>