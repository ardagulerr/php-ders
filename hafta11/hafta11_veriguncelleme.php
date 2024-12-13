<?php
include "hafta11.php";
$guncelle=$db->exec("UPDATE deneme SET adi='arda' WHERE soyad='cristiano'");
if($guncelle)
{
    echo "Güncelleme Başarılı";
}
else
{
    echo "Güncelleme Başarısız";
}
//Veritabınından prepare ile veri güncelleme
$sorgu=$db->prepare("UPDATE deneme SET
ad=?
soyad=?
");
$guncelle=$sorgu->execute(array("ronaldo","pro"));
if($guncelle)
{
    echo "Güncelleme başarılı";
}
else
{
    echo "Güncelleme Başarısız";
}
?>