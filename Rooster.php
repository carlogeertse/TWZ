<!DOCTYPE html>
<?php include ("connectDB.php"); ?>
<html>
    <head>
        <title>
            Rooster
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    </head>

    <body>
        <?php include("Menu.php"); ?>
        <h1>
            Hier ziet u de huidig beschikbare roosters:
        </h1>
        <ul>
            <li>
                <a href = "survRooster.php">
                    Surveillantenrooster
                </a>
            </li>
            <li>
                <a href = "tentRooster.php">
                    Tentamenrooster
                </a>
            </li>
        </ul>
    </body>
</html>