<?php

   $ad = "Seyma";
   $soyad = "Yesilyurt";
   $yas = "24";
   
   $mesaj = "my name is $ad $soyad and $yas years old.";

   echo mesaj."<br>";
   echo mesaj[0]."<br>";
   echo mesaj[5]."<br>";

   echo strlen($mesaj)."<br>";
   echo str_word_count($mesaj)."<br>";
   echo strtolower($mesaj)."<br>";
   echo str_replace(["seyma","19"],["nur","11"],$mesaj);

   ?>