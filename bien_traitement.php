<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title> <?php echo $_GET['action']." un bien" ?? "Trouver un bien"; ?> Imo-Agence</title>
</head>

<body>
<?php include "header.php"; ?>
    <h1><?=$_GET['action'] ?> un bien</h1>
    <?php
include_once($_GET['action'].'.php');
?>
    </body>

</html>