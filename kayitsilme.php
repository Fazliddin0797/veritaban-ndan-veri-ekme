<?php
session_start();
if ( !isset($_SESSION['username']) ) {
header("Location: login.php");
exit();
}

include("mysqlbaglan.php");
$sql = "DELETE FROM musteriler WHERE musteri_id=".$_GET['id'];
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
                    <li><a href="kayitform.php"> Kayıt Gir </a>
                    <li><a href="listele.php"> Kayıtları Listele </a>
                    <li><a href="kayitsil.php"> Kayıt Sil </a>
                    <li><a href="guncelliste.php"> Kayıt Güncelle </a>
                    <li><p><a href='_logout.php'>[Oturumu Kapat]</a></p>
                </div>
            <ul>
                <div class="tablosil">
                    <?php
                    if(!$cevap ){
                        echo '<br>Hata:' . mysqli_error($baglanti);
                    }
                    else
                    {
                        echo "Kayıt Silindi!</br>";
                        echo " Kayıtları görmek için<a href='listele.php'> tıklayınız</a>\n";
                    }
            ?>
            </div>
        </div>
    </body>
</html>