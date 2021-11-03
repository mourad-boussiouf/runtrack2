<?php

$bol = true;
$nombreentier = 666;
$mots = "alorslazone";
$nombredecimal = 1.337;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau type de var</title>
</head>
<body>
<style>
td {
    border-style: solid;
    text-align: center;
}

</style>

    <table>
        <tr>
            <td>Type</td>
            <td>Nom</td>
            <td>Valeur</td>
        </tr>
        <tr>
            <td>booléen</td>
            <td>bol</td>
            <td><?php echo $bol ? 'true' : 'false'; ?></td>
        </tr>
        <tr>
            <td>nombres entiers</td>
            <td>entier</td>
            <td><?php echo $nombreentier ?></td>
        </tr>
        <tr>
            <td>chaine de caracteres(strings)</td>
            <td>alorslazone</td>
            <td><?php echo $mots ?></td>
        </tr>
        <tr>
            <td>nombres decimaux</td>
            <td>decimal</td>
            <td><?php echo $nombredecimal ?></td>
        </tr>
    </table>
    
</body>
</html>