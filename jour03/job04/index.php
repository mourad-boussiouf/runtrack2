<?php

$str = "Dans l'espace, personne ne
vous entend crier."; //phrase à compter


echo "Phrase : ".$str."</br>"."</br>"."</br>";


for ($i=0; isset($str[$i])==true; $i++ ); //compte un par un le nombre de caractère tant que l'index est toujours inset

echo "Nombre de caractères :".$i."</br>"; //affiche le numero du dernier index dont l'inset est true (contenu dans la string)




?>