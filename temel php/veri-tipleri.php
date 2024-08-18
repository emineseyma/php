<?php

/*

string  : metinsel belgeler
int     : tam sayılar
double  : ondalıklı sayılar
boolean :true/false bilgi
object  :nesne
array   :dizi
null    :değer içermeyen bilgi / boş değer

*/




$urunAdi = "Iphone 7";
echo $urunAdi.' : '.gettype($urunAdi);

echo "<br>";

$kdvOrani= 0.19;
echo $kdvOrani.' : '.gettype($kdvOrani);

echo "<br>";

$fiyat = 19000;
echo $fiyat.' : '.gettype($fiyat);

echo "<br>";

$satistaMi = false;
echo gettype($satistaMi);

?>