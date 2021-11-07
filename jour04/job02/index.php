


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>
<tr>
<th>Argument : </th>
<th>Prenom</th>
<th>Nom</th>
</tr>
<tr>
<td>Valeur : </td>
<td><?php echo $_GET['prenom'] ?> </td>
<td><?php echo $_GET['nom'] ?> </td>
</table>

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

