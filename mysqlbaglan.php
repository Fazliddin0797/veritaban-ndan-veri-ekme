<?php 
$server= 'localhost';
$user= '389017';
$password= '706572';
$database= '389017';

$baglanti= mysqli_connect($server,$user,$password,$database);

if(!$baglanti){
    echo "MySql sunucu ile baglanttÄ± kurulamadÄ±!" . "<br>";
    echo "HATA: " . mysqli_connect_error();
    exit;

}


?>