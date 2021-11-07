



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p><i>Non sensible à la casse ! </i>
<form method="POST" action = "index.php">

<p>
    <label for = "username"> Entrez le username : </label>
    <input type = "text" name = "username" id = "username" />
    <label for = "password"> Entrez le password : </label>
    <input type = "text" name = "password" id = "password" />

</p>

<p>
    <input type = "submit" value = Submit />

</p>

</form>


<?php


if ($_POST['username'] == 'John' && $_POST['password'] == 'Rambo' || $_POST['username'] == 'john' && $_POST['password'] == 'rambo' ){
  echo 'C\'est pas ma guerre'; }
  else{
    echo 'Votre pire
    cauchemar';
  }
 
    
    ?> 
 



