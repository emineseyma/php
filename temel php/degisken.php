<?php
   
   $maasEmine = 27000;
   $maasSeyma = 26000;
   $maasNur = 25000;

   $vergiOrani1 = 0.19;
   $vergiOrani2 = 0.11;

   echo $maasEmine - ($maasEmine *  $vergiOrani1);
   echo "<br>";
   echo $maasSeyma - ($maasSeyma * $vergiOrani1);
   echo "<br>";
   echo $maasNur - ($maasNur * $vergiOrani2);

?>