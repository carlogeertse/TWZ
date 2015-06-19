<!DOCTYPE html>
<?php include ("connectDB.php"); ?>
<html>
    <head>
        <title>
            Invoeren
        </title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php include("Menu.php"); ?>
        <h1 style = "text-align: center;">
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