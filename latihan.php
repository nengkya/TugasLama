<?php
   function luasLingkaran ($phi,$r){
	$luas = $phi*$r*$r;
	return $luas;
   }
   echo "<li>Luas Lingkaran Adalah </li>".luasLingkaran(3.14,10);
   
   function KelilingPersegiPanjang ($panjang,$lebar){
	   $keliling = $panjang*$lebar;
       return $keliling;	   
   }
   echo "<li>Kelilingnya Persegi Adalah </li>".KelilingPersegiPanjang(10,6);

   function luasegitiga($alas,$tinggi){
	  $luas1 = 0.5*$alas*$tinggi;
      return $luas1; 	  
   }
   echo "<li>Luas Segitiga Adalah </li>".luasegitiga(4,8);
   
   function volumekubus ($sisi){
     $volume=$sisi*$sisi*$sisi;
     return $volume;	 
   }
   echo "<li>Volume Kubus Adalah </li>".volumekubus(6);
   
   function kelilingpersegi($sisi){
	  $kelilingsegi=$sisi*$sisi;
      return $kelilingsegi; 	  
   }
   echo"<li>Jadi Keliling Persegi adalah </li>".kelilingpersegi(10);
   
   
   
?>