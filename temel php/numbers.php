<?php
 
  $sayi1 = 3;
  $sayi2 = 7;

  echo "sonuc: ".($sayi1+$sayi2)."<br>";
  echo "sonuc: ".($sayi1-$sayi2)."<br>";
  echo "sonuc: ".($sayi1*$sayi2)."<br>";
  echo "sonuc: ".($sayi1/$sayi2)."<br>";

  $sayi3 = 9;

  echo "sonuc: ".(($sayi1+$sayi2)/$sayi3)."<br>";

  echo var_dump(is_int(5))."<br>";
  echo var_dump(is_int(5.2))."<br>";

  echo abs(-10)."<br>";
  echo ceil(4.3)."<br>";
  echo floor(4.8)."<br>";
  echo round(4.4)."<br>";

  echo sqrt(25)."<br>";
  echo pow(5,2)."<br>";

  ?>