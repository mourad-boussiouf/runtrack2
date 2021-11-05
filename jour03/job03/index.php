<?php

$str = "I'm sorry Dave I'm afraid I can't
do that.";

var_dump($str); //me permet de savoir le nombre de charactères
$i=0;

for ($i=0; isset($str[$i])==true; $i++ ){      //si la lettre contenu dans chacun des index est une voyelle, l'afficher.

    if ($str[$i] == "a"  || $str[$i] == "e" || $str[$i] == "i" || $str[$i] == "I" || $str[$i] == "o" || $str[$i] == "u" || $str[$i] == "y" ){

    echo $str[$i]; 
    }
 }




?>