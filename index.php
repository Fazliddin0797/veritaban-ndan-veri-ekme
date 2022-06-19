<?php
session_start();
if ( isset($_SESSION['username']) ) {
header("Location: uyesayfa.php");
exit();
}
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
            <li><a href="index.php"> Anasayfa </a><br><hr>
            <li><a href="login.php"> Giris </a><br><hr>
            <li><a href="_register.php"> Kayıt ol </a><br><hr>
            </div>
        </ul>

        </div>
        <p> Merhaba <? echo $_SESSION['username'] ?>, <br />
        <h1> Burada sitemiz ve hizmetlerimiz hakkında bilgiler girilecektir </h1>
        </div>
    </body>
</html>