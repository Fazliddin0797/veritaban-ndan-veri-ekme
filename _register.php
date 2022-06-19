<?php
session_start();
if ( isset($_SESSION['username']) ) {
header("Location: uyesayfa.php");
exit();
}

require ('mysqlbaglan.php');
if (isset($_POST['username']) && isset($_POST['password'])){
extract($_POST);
$password = hash('sha256', $password);
$sql="INSERT INTO `kullanicilar` (kullaniciadi, sifre)";
$sql = $sql . "VALUES ('$username', '$password')";
$cevap = mysqli_query($baglanti, $sql);
if ($cevap){
$mesaj = "<h1>Kullanıcı oluşturuldu.</h1>";
}else{
$mesaj = "<h1>Kullanıcı oluşturulamadı!</h1>";
}
}
?>
<html>
    <head>
    

        <meta http-equiv="Content-Type" content="text/html;
        charset=UTF-8" />
        <link rel="stylesheet" href="style.css">

</head>
    <body>
        <div class="container">
            <div class="cont">
            <div class="TURKUY">
                <a href="index.php"><p>TURKUY</p></a></div>
            </div>
        <div class="tablogin">

            <?php
            if (isset($mesaj)) echo $mesaj;
            ?>
            <h2>Kayıt Formu</h2>
            <form action="<?php $_PHP_SELF ?>" method="POST">
                Kullanıcı Adı:
                <input type="text" name="username"><br />
                Şifre:
                <input type="password" name="password"><br />
                <input type="submit" value="Kaydet"/><br /><br />
                <a href="login.php">[Kullanıcı Girişi]</a>
            </form>
</div>
</div>
</body>
</html>
