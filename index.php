<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Accueille imo Agence</title>
</head>

<body>
<?php include "header.php"; ?>
    <nav>
        <p><a href="bien_ajout.php">Ajouter un bien</a></p>
        <form action="bien_traitement.php" method="GET">
            <input type="submit" name="action" value="achat" />
            <input type="submit" name="action" value="louer" />
            <input type="submit" name="action" value="vente" />
        </form>
    </nav>
    <footer>
        <p><a href="form_contact.php">Clients</a></p>
    </footer>
</body>

</html>