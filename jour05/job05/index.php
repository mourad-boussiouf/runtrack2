
<?php

$str = "un bon chasseur sait chasser sans son chien";
$char = "s";

function occurrences($str, $char){
    $i = 0;
    $compt = 0;
    while(isset($str[$i]) == true){
        if($str[$i] == $char){
            $compt++;
        }
        $i++;
    }
    return($compt);       
}

echo(occurrences($str, $char));
 
?>



