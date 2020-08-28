<?php
include "header.php";
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
</tr>
</table>
    <h1>client</h1>
    <form action="contact_traitement.php" method="POST">
        <p>
            <label for="nom">Nom de famille</label>
            <input type=" text" id="nom" name="nom" placeholder="Saisir votre nom de famille" size="50" />
        </p>
        <p>
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" placeholder="Saisir votre prénom" size="50" />
        </p>
        <p>
            <label for="adresse">Adresse de résidance</label>
            <input type="text" id="adresse" name="adresse" placeholder="Saisir votre adresse" size="50" />
        </p>
        <p>
            <label for="ville">La ville ou vous résidez</label>
            <input type="text" id="ville" name="ville" placeholder="Saisir votre ville" size="50" />
        </p>
        <p>
            <label for="cp">Saisir votre code postal à 5 chiffres.</label>
            <input type="number" id="cp" name="cp" placeholder="Code postal" size="50" />
        </p>
        <input type="submit" name="btContact" value="Ajouter un client" />
            </form>
    </body>

</html>