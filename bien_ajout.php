<?php
include "header.php";
if (isset($_POST['btajout'])) {
    extract($_POST);
        $sql = "insert into produits values (null,:pro_numero, :pro_type, :pro_adresse, :pro_carac)";
    $statement = $link->prepare($sql);
    $statement->execute([
                ":pro_numero" => $pro_numero,
        ":pro_type" => $pro_type,
        ":pro_adresse" => $pro_adresse,
        ":pro_carac" => $pro_carac
    ]);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ajout d'un bienImo-Agence</title>
</head>

<body>
    <h1>Ajouter un bien</h1>
    <form action="bien_ajout.php" method="POST">
        <p>
            <label for="pro_numero">Numéro du bien</label>
            <input type="number" id="pro_numero" name="pro_numero" placeholder="Saisir le numéro du bien à ajouter" size="50" />
        </p>
        <p>
            <label for="pro_type">Type du bien</label>
            <select name="pro_type">
                <option>louer</option>
                <option>achat</option>
                <option>vente</option>
            </select>
        </p>
        <p>
            <label for="pro_adresse">Adresse ou se situ le bien</label>
            <input type="text" id="pro_adresse" name="pro_adresse" placeholder="Saisir l'adresse du bien en question" size="50" />
        </p>
        <p>
            <label for="pro_carac">Caractéristique</label>
            <textarea id="pro_carac" name="pro_carac"></textarea>
        </p>
        <input type="submit" name="btajout" value="Ajouter un bien" />
    </form>
</body>

</html>