<?php
session_start();
if ( !isset($_SESSION['username']) ) {
header("Location: login.php");
exit();
}
?>
<html>
<meta http-equiv="Content-Type"
content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css">


<body>
    <div class="container">
        <div class="cont">
        <div class="TURKUY">
                <a href="index.php"><p>TURKUY</p></a></div>
        
           
            <ul>
                <div class="cerceve">
                    <li><a href="kayitform.php"> Randevu al </a><br>
                    <li><a href="listele.php"> Randevu Listele </a><br>
                    <li><a href="kayitsil.php"> R_Kayıt Sil </a><br>
                    <li><a href="guncelliste.php"> R_Kayıt Güncelle </a>
                    <li><p><a href='_logout.php'>[Oturumu Kapat]</a></p>
                </div>

            <ul>
            
            
        </div>
        <p> Merhaba <? echo $_SESSION['username'] ?>, <br />
                Özel sayfanıza hoş geldiniz.<br /><br />
    </div>
</body>
</html>
