<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Saisis de vos données Imo-Agence</title>
</head>

<body>
    <h2>Voici vos données</h2>
    <table>
        <caption>Mes données</caption>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Code postal</th>
            </tr>
        </thead>
    <tr>
    <?php
echo "<td>".$_POST['nom']."</td>";
echo "<td>".$_POST['prenom']."</td>";
echo "<td>".$_POST['adresse']."</td>";
echo "<td>".$_POST['ville']."</td>";
echo "<td>".$_POST['cp']."</td>";
    ?>
    </tr>
    </table>
</body>

</html>