
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" action = "index.php">

<p>
    <label for = "nombre"> Entrez un nombre </label>
    <input type = "number" name = "nombre" id = "nombre" />


</p>

<p>
    <input type = "submit" value = Submit />

</p>

</form>


<?php


if($_POST['nombre'] % 2 == 0){
  echo 'Nombre pair'; }
  elseif($_POST['nombre'] % 2 != 0){
    echo 'Nombre impair';
  }
 
    
    ?> 