<?php
$sayi=array(
    "1"=>10,
    "2"=>30,
    "3"=>5,
    "4"=>85,
    "5"=>126,
);

echo"<h5> dizi elemanlarını küçükten büyüğe sıralama</h5>";
echo "<pre>";
rsort($sayi);
print_r($sayi);
echo"</pre>";


echo"<h5> dizi elemanlarını büyükten küçüğe sıralama</h5>";
echo "<pre>";
shuffle($sayi);
print_r($sayi);
echo"</pre>";

$sayi=array(
    "1"=>10,
    "2"=>30,
    "3"=>5,
    "4"=>85,
    "5"=>126,
);

echo"<h5> dizi elemanlarını küçükten büyüğe sıralama</h5>";
echo "<pre>";
rsort($sayi);
print_r($sayi);
echo"</pre>";


echo"<h5> dizi elemanlarını büyükten küçüğe sıralama</h5>";
echo "<pre>";
shuffle($sayi);
print_r($sayi);
echo"</pre>";

echo"<h5> dizi elemanlarını rastgele sıralama</h5>";
echo "<pre>";
shuffle($sayi);
print_r($sayi);
echo"</pre>";



echo"<h5> dizi elemanlarını indis değerlerine göre  büyükten küçüğe sıralama</h5>";
echo "<pre>";
ksort($sayi);
print_r($sayi);
echo"</pre>";



echo"<h5> dizi elemanlarını indis değerlerine göre küçükten büyüğe sıralama</h5>";
echo "<pre>";
ksort($sayi);
print_r($sayi);
echo"</pre>";


?>
