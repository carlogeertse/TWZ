<!DOCTYPE html>
<?php include ("connectDB.php"); ?>
<html>
    <head>
        <title>
            Beschikbaarheid
        </title>
        <link rel = "stylesheet" type = "text/css" href = "Style.css">
    </head>

    <body style = "background-image: url(src/download.jpg); position: relative; background-size: cover;">
        <?php include("Menu.php"); ?>

        <h1>
            <b>
                Invoeren Beschikbaarheid
            </b>
        </h1>

        <h3> Kies een week </h3>

        <form action="beschikInvoerenPost.php" method="POST">
            Selecteer een week:
            <input type="week" name="week">
            <input type="submit">
        </form>

    </body>
</html>