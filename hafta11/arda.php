<?php
include "hafta11.php";
$kayit=$db->exec("INSERT INTO deneme SET id='4', ad='Gelişim', soyad='Üniversitesi'");
if($kayit)
{
    echo"Kayıt işlemi başarılı";
}
else
{
    echo"Kayıt işlemi başarısız";
}
//Veritabanına Prepara kullanarak manuel veri ekleme
$sorgu=$db->prepare("INSERT INTO deneme SET 
id=?,
ad=?,
soyad=?");
$kayit=$sorgu->execute(array("6","arda","pro"));
if($kayit)
{
    echo "Kayıt işlemi başarılı";
}
else
{
    echo"Kayıt işlemi başarısız";
}
?>