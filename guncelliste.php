<?php
session_start();
if ( !isset($_SESSION['username']) ) {
header("Location: login.php");
exit();
}

include("mysqlbaglan.php");
$sql = "SELECT * FROM musteriler";

$cevap = mysqli_query($baglanti,$sql);

mysqli_close($baglanti);
?>
<html>
    <head>
    <meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
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
                <li><a href="listele.php"> R_Kayıtları Listele </a>
                <li><a href="kayitsil.php"> R_Kayıt Sil </a>
                <li><a href="guncelliste.php"> R_Kayıt Güncelle </a>
                <li><p><a href='_logout.php'>[Oturumu Kapat]</a></p>
            </div>
        <ul>
        </div> 
        <div class="tabloguncel">
        <?php
        if(!$cevap ){
            echo '<br>Hata:' .
            mysqli_error($baglanti);
            }
            
            echo "<table border=1>";
            echo "<tr>";
            echo "<th>Musteri ID</th>";
            echo "<th>Ad Soyad</th>";
            echo "<th>Telefon Numara</th>";
            echo "<th>Secilen il</th>";
            echo "<th>Butce</th>";
            echo "</tr>";
            while($gelen=mysqli_fetch_array($cevap))
            {
            
            echo "<tr><td>".$gelen['musteri_id']."</td>";
            echo "<td>".$gelen['adsoyad']."</td>";
            echo "<td>".$gelen['telno']."</td>";
            echo "<td>".$gelen['il']."</td>";
            echo "<td>".$gelen['butce']."</td>";
            echo "<td><a href=guncelle.php?id=";
            echo $gelen['musteri_id'];
            echo ">Güncelle</a></td></tr>";
            }
            
            echo "</table>";
        ?>
        </div>
        </div>
    </body>
</html>