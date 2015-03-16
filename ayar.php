<?php
$host='localhost';
$kullanici='root';
$parola='';
$vt='gelinlik_kirala';

$baglan=mysql_connect($host,$kullanici,$parola);

if(! $baglan) die ("Bağlantı kurulamadı!");

mysql_select_db($vt,$baglan) or die ("Veri tabanına bağlanılamadı!");

mysql_set_charset('utf8',$baglan); 

?>