<?php

$str = "On n est pas le meilleur quand on le croit mais quand on le sait.";


$dic = [

"consonnes" =>["B", "C", "D", "F", "G", "H", "J", "K", "L","M", "N", "P", "Q", "R", "S", "T", "V", "W", "X", "Z",
"b", "c", "d", "f", "g", "h", "j", "k", "l","m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z",],
"voyelles"  => ["A", "E", "I", "O", "U" ,"Y", "a","e","i","o", "u", "y"], 

];

$nombreconsonnes=0;

$nombrevoyelles=0;



for ($x=0; isset($str[$x])==true; $x++) { 


    for ($i=0;isset($dic["consonnes"][$i]); $i++) { 
    
        if ($str[$x]==$dic["consonnes"][$i]) {
         
            $nombreconsonnes++;
        }
        
    }
}


for ($x=0; isset($str[$x])==true; $x++) {

    for($i=0;isset($dic["voyelles"][$i]); $i++) {

        if ($str[$x]==$dic["voyelles"][$i]) {
            
            $nombrevoyelles++;

        }
    }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p> Occurences de consomme et voyelles pour la phrase : <br> <?php echo $str ?>
<table>
  <thead>
    <tr>
      <th>Voyelles</th>
      <th>Consonnes</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $nombrevoyelles ?></td>
      <td><?php echo $nombreconsonnes ?></td>
    </tr>

  </tbody>

</table>



</body>
</html>



