<!DOCTYPE html>
<?php include ("connectDB.php"); ?>
<html>
    <head>
        <title>
            Rooster van de tentamens
        </title>
        <link rel = "stylesheet" type = "text/css" href = "Style.css">
    </head>

    <body style = "background-image: url(download.jpg); position: relative; background-size: cover;>
        <?php
            include("Menu.php");
        ?>
        <h1>
            Tentamenrooster
        </h1>
        <h3>
            Selecteer hier de week om uw tentamens te kunnen bekijken:
        </h3>

        <form action="tentamenrooster.php" method="POST">
            <table>
                <tr>
                    <td>
                        Selecteer een week:
                    </td>
                    <td>
                        <input type="week" name="week">
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>
                        <input type="submit">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>

