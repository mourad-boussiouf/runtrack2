<?php
$str="Certaines choses changent, et d'autres
ne changeront jamais.";

for ($b=1;isset($str[$b]); $b++){  //fais commencer la string par le deuxième caractère, puis le troisième est donc le deuxieme etc...
    echo $str[$b];
}
echo $str[0]; //place le premier index à la fin
?>