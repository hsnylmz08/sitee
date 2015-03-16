
<?php

include("include/top.php");

$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$kadi=$_POST['kadi'];
$email=$_POST['email'];
$sifre=$_POST['sifre'];
$sifret=$_POST['sifret'];
$tel=$_POST['tel'];
$ulke=$_POST['ulke'];
$sehir=$_POST['sehir'];
$dogum_yeri=$_POST['dogum_yeri'];
$dogum_tarihi=$_POST['dogum_tarihi'];
$cinsiyet=$_POST['cinsiyet'];

if(empty($ad) || empty($soyad) || empty($kadi) || empty($email) || empty($sifre) || empty($sifret) || empty($tel) || empty($ulke) || empty($sehir) || empty($dogum_yeri) || empty($dogum_tarihi) || empty($cinsiyet)){
echo "Tüm alanları doldurunuz";
} elseif ($sifre!=$sifret) {
                echo "Şifreler eşleşmiyor. ";
}
 else {
                $sorgu="insert into uye_kayit set adi='".$ad."', soyadi='".$soyad."', kadi='".$kadi."',email='".$email."',sifre='".$sifre."',sifret='".$sifret."',telefon='".$tel."',ulke='".$ulke."',sehir='".$sehir."',dogum_tarihi='".$dogum_tarihi."',dogum_yeri='".$dogum_yeri."',cinsiyet='".$cinsiyet."'";             
                $ekle=mysql_query($sorgu);
               
                if($ekle) {
                               echo "Kaydınız başarı ile yapıldı.Ana sayfaya yönlendiriliyorsunuz.";
							   header("Location:index.php");
                }else{
                               echo "Kaydınız yapılamadı";
                }
}
?>
</div>
<?php include("include/footer.php"); ?>

