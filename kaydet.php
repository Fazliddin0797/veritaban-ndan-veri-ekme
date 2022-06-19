<?php
session_start();
if ( !isset($_SESSION['username']) ) {
header("Location: login.php");
exit();
}

include("mysqlbaglan.php");

extract($_POST);

$sql = "INSERT INTO musteriler ".
"(adsoyad,telno,il,butce) ".
"VALUES ( '$adsoyad','$telno', '$il', '$butce')";
$cevap = mysqli_query($baglanti,$sql);
mysqli_close($baglanti);
?>
<html>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <div class="cont">
            <div class="TURKUY">
                <a href="index.php"><p>TURKUY</p></a></div>
        <ul>
            <div class="cerceve">
            <li><a href="index.php"> Anasayfa </a>
            <li><a href="kayitform.php"> Randevu al </a>
            <li><a href="listele.php"> Randevu Listele </a>
            <li><a href="kayitsil.php"> R_Kayıt Sil </a>
            <li><a href="guncelliste.php"> R_Kayıt Güncelle </a>
            <li><p><a href='_logout.php'>[Oturumu Kapat]</a></p>
            </div>
        <ul>
        </div>
            <br/>
        <div class="tabkaydet">
            <?php
                echo "Girdiginiz bilgiler: </br>";
                echo "Ad Soyad : $adsoyad </br>";
                echo "Telefon numara: $telno</br>";
                echo "Secilen il : $il</br>";
                echo "Butce : $butce</br>";
                if(!$cevap){
                    echo '<br>Hata:' . mysqli_error($baglanti);
                }
                else
                {
                    echo "Veritabanina eklendi." . "<br>" . "<br>";
                    echo "Girdiğiniz bilgiler üzerinden sizinle irtibata geçilecektir!";
                    echo "<br/><a href='kayitform.php'> Geri Dön</a>";
                }
            ?>
        </div>
        </div>
    </body>
</html>