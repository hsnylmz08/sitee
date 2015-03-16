<?php 
require_once("ayar.php");
ob_start();
session_start();
$id=$_GET["id"]; 
$kadi = "admin";
$sifre = "admin";
 
$sql_check = mysql_query("select * from uye_kayit where kadi='".$kadi."' and sifre='".$sifre."' ") or die(mysql_error());
 
if(mysql_num_rows($sql_check))  {
    $_SESSION["login"] = "true";

}
else {
    if($kadi=="" or $sifre=="") {
        echo "<center>Lutfen kullanici adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
    else {
        echo "<center>Admin Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
	
}
print "Hoşgeldiniz";
header("Refresh: 5; url=admin.php");
ob_end_flush();
?>