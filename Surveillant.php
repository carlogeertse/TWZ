<!DOCTYPE html>
<?php
    include ("connectDB.php");
?>
<html>
    <head>
        <title>
            Homepage
        </title>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    </head>

    <body>
        <?php include("Menu.php"); ?>
        <h1>
            Wat wilt u doen met betrekking tot Surveillanten?
        </h1>

        <ul>
            <li>
                <a href = "survInvoeren.php">Nieuwe Surveillant toevoegen</a>
            </li>
            <li>
                <a href = "survRooster.php">Rooster van Surveillanten bekijken</a>
            </li>
            <li>
                <a href = "survVerwijderen.php">Bestaande Surveillant verwijderen</a>
            </li>
        </ul>

    </body>
</html>