<table>
    <caption>Vendre</caption>
    <thead>
        <tr>
            <th>type du bien</th>
            <th>Caractéristique</th>
            <th>Adresse</th>
        </tr>
    </thead>
    <tr>
        <?php
        $sql = "select * from produits where pro_type = :type";
        $statement = $link->prepare($sql);
        $statement->execute([":type" => $_GET['action']]);
        foreach ($statement->fetchAll() as $cle) {
            echo "<td>" . $cle['pro_type'] . "</td>";
            echo "<td>" . $cle['pro_carac'] . "</td>";
            echo "<td>" . $cle['pro_adresse'] . "</td>";
            echo "</tr>";
        }
        ?>
</table>