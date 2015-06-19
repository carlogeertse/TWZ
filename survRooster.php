<!DOCTYPE html>
<?php include ("connectDB.php"); ?>
<html>
    <head>
        <title>
            Rooster van de surveillanten
        </title>
        <link rel = "stylesheet" type = "text/css" href = "Style.css">
    </head>

    <body>
        <?php
            include("Menu.php");
        ?>
        <h1 style = "text-align: center;">
            Surveillantenrooster
        </h1>
        <br />
        <h3>
            Selecteer hier uw naam om uw persoonlijke rooster te bekijken:
        </h3>

        <select>
            <option value = "01">-Selecteer uw naam-</option>
            <option value = "02"></option>
        </select>
    </body>
</html>