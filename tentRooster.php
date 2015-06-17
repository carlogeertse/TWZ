<!DOCTYPE html>
<?php include ("connectDB.php"); ?>
<html>
    <head>
        <title>
            Rooster van de tentamens
        </title>
        <link rel = "stylesheet" type = "text/css" href = "Style.css">
    </head>

    <body>
        <?php
            include("Menu.php");
        ?>
        <h1>
            Tentamenrooster
        </h1>
        <br />
        <h3>
            Selecteer hier de week om uw tentamens te kunnen bekijken:
        </h3>

        <form action="tentamenrooster.php" method="POST">
            Selecteer een week:
            <input type="week" name="week">
            <input type="submit">
        </form>
    </body>
</html>

