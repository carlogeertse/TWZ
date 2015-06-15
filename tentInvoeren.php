<!DOCTYPE html>
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
        <h1>
            Invoeren tentamens
        </h1>

        <h3>
            Invoeren van tentamens op het rooster. Hier worden alle tentamens ingeroosterd.
        </h3>

        <?php include("connectDB.php"); ?>
        <form action="action_page.php">
            First name:<br>
            <select name="cars">
                <option value="volvo">Volvo XC90</option>
                <option value="saab">Saab 95</option>
                <option value="mercedes">Mercedes SLK</option>
                <option value="audi">Audi TT</option>
            </select>
            <input type="submit" value="Submit">
            <br>
            Last name:<br>
            <input type="text" name="lastname" value="Mouse">
            <br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>