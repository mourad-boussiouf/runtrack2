<?php

$x=0;

foreach ($_GET as $value){
    $x++;
}

echo $x;





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

<form method="GET" action = "index.php">

<p>
    <label for = "prenom"> Entrez le prénom : </label>
    <input type = "text" name = "prenom" id = "prenom" />
    <label for = "nom"> Entrez le nom : </label>
    <input type = "text" name = "nom" id = "nom" />

</p>

<p>
    <input type = "submit" value = Submit />

</p>

</form>




    
</body>
</html>