



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
    <label for = "prenom"> Entrez le prénom : </label>
    <input type = "text" name = "prenom" id = "prenom" />
    <label for = "nom"> Entrez le nom : </label>
    <input type = "text" name = "nom" id = "nom" />

</p>

<p>
    <input type = "submit" value = Submit />

</p>

</form>

<table>
<tr>
<th>Argument : </th>
<th>Prenom</th>
<th>Nom</th>
</tr>
<tr>
<td>Valeur : </td>
<td><?php
if (isset($_POST['prenom'])==true) {
    
 echo $_POST['prenom']; } ?> </td>

<td><?php
if (isset($_POST['nom'])==true) {
echo $_POST['nom']; }?> </td>
</table>


