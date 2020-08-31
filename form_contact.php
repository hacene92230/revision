<?php
include "header.php";
if(isset($_POST['btContact']))
{
    extract($_POST);
    $sql = "insert into clients values (null,:cli_prenom, :cli_nom, :cli_adresse, :cli_ville, :cli_postal)";
$statement = $link->prepare($sql);
$statement->execute([
            ":cli_prenom" => $cli_prenom,
    ":cli_nom" => $cli_nom,
    ":cli_adresse" => $cli_adresse,
    ":cli_ville" => $cli_ville,
    ":cli_postal" => $cli_postal
]);
echo "<h2>Le client à bien été ajouter</h2>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Contact Imo-Agence</title>
</head>

<body>
<table>
        <caption>Les clients</caption>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>adresse</th>
                <th>Ville</th>
                <th>Code postal</th>
            </tr>
        </thead>
    <tr>
    <?php
        $sql = "select * from clients";
        $statement = $link->prepare($sql);
        $statement->execute();
        foreach ($statement->fetchAll() as $cle) {
            echo "<td>" . $cle['cli_nom'] . "</td>";
            echo "<td>" . $cle['cli_prenom'] . "</td>";
            echo "<td>" . $cle['cli_adresse'] . "</td>";
            echo "<td>" . $cle['cli_ville'] . "</td>";
            echo "<td>" . $cle['cli_postal'] . "</td>";
            echo "</tr>";
        }
?>
        </table>
    <h1>client</h1>
    <form action="" method="POST">
        <p>
            <label for="nom">Nom de famille</label>
            <input type=" text" id="nom" name="cli_nom" placeholder="Saisir votre nom de famille" size="50" />
        </p>
        <p>
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="cli_prenom" placeholder="Saisir votre prénom" size="50" />
        </p>
        <p>
            <label for="adresse">Adresse de résidance</label>
            <input type="text" id="adresse" name="cli_adresse" placeholder="Saisir votre adresse" size="50" />
        </p>
        <p>
            <label for="ville">La ville ou vous résidez</label>
            <input type="text" id="ville" name="cli_ville" placeholder="Saisir votre ville" size="50" />
        </p>
        <p>
            <label for="cp">Saisir votre code postal à 5 chiffres.</label>
            <input type="number" id="cp" name="cli_postal" placeholder="Code postal" size="50" />
        </p>
        <input type="submit" name="btContact" value="Ajouter un client" />
            </form>
    </body>

</html>