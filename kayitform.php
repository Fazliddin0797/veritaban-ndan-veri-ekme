<?php
session_start();
if ( !isset($_SESSION['username']) ) {
header("Location: login.php");
exit();
}
?>
<html>
    <head>
    <meta http-equiv="Content-Type"
    content="text/html; charset=UTF-8" />
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
        <div class="tablo">

            <form action="kaydet.php" method="POST">
            Ad soyad: <br>
            <input type="text" name="adsoyad"><br>
            Telefon numara: <br>
            <input type="text" name="telno"><br>
            Ev almak istediğiniz il: <br>
            <input type="text" name="il"><br>
            Butce: <br>
            <input type="text" name="butce"><br>
            <input type="submit" value= "Kaydet">
        </div>

        </form>
        </div>
    </body>
    </html>
