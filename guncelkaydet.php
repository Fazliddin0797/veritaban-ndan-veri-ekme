<?php

include("mysqlbaglan.php");

extract($_POST);
$sql ="UPDATE musteriler ".
"SET
adsoyad='$adsoyad',telno='$telno',il='$il', butce='$butce' ".
"WHERE musteri_id=".$_GET['id'];
$cevap = mysqli_query($baglanti,$sql);

echo "<html>";
echo "<meta http-equiv='Content-Type' ";
echo "content='text/html; charset=UTF-8' />";
if(!$cevap){
echo '<br>Hata:' . mysqli_error($baglanti);
}
else{
echo "Kayıt Güncellendi.";
echo "<br/><a href='guncelliste.php'> Geri Dön</a>";
}
echo "</html>";

mysqli_close($baglanti);
?>

