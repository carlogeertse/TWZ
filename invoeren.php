<!DOCTYPE html>
<?php include ("connectDB.php"); ?>
<html>
    <head>
        <title>
            Invoeren
        </title>
        <link rel = "stylesheet" type = "text/css" href = "Style.css">
    </head>

    <body>
        <?php include("Menu.php"); ?>
        <h1>
            Waar wil je informatie in invoeren?
        </h1>

        <ul>
            <li>
                <a href = "survInvoeren.php">
                    Surveillant toevoegen
                </a>
            </li>
            <li>
                <a href = "tentInvoeren.php">
                    Tentamen toevoegen
                </a>
            </li>
        </ul>
    </body>
</html>