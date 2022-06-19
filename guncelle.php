<?php

include("mysqlbaglan.php");
$sql = "SELECT * FROM musteriler WHERE musteri_id=".$_GET['id'];
$cevap = mysqli_query($baglanti,$sql);
if(!$cevap ){
echo '<br>Hata:' . mysqli_error($baglanti);
}
$gelen=mysqli_fetch_array($cevap);
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
            <div class="tabloguncel">
                <form action="guncelkaydet.php?id=<?php echo $_GET['id'] ?>" method="POST">
                    Ad Soyad:
                    <input type="text" name="adsoyad" value="<?php echo $gelen['adsoyad']?>" /> <br />

                    Telefon numara:
                    <input type="text" name="telno" value="<?php echo $gelen['telno'] ?>" /> <br />

                    Secilen il :
                    <input type="text" name="il" value="<?php echo $gelen['il'] ?>" /> <br />

                    Butce : 
                    <input type="text" name="butce" value="<?php echo $gelen['butce'] ?>" /> <br />

                    <input type="submit" value="KAYDET"/>
                </form>
            </div>
        </div>
    </body>
</html>