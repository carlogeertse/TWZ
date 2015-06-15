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
        <h1>
            Invoeren tentamens
        </h1>

        <h3>
            Invoeren van tentamens op het rooster. Hier worden alle tentamens ingeroosterd.
        </h3>

        <?php include("connectDB.php");
        $sql = "SELECT *
                FROM academie";
        $academies = $conn->query($sql);

            if($academies->fetch_assoc() > 0){
            echo "hoi ik ben piet";
            while($row = $academies->fetch_assoc())
            {
                //echo"<option value='academieNaam'>".$row['naam']."</option>";
            }
        }
        echo "hierwel";
        ?>
        <form action="tentInvoeren.php">
            <br>
            academie:<br>
            <select name="academie">
            </select>
            <br>
            datum: (format dd-mm-jjjj)
            <br>
            <input type="date" name="datum">
            <br>
            begintijd: (format hh:mm)
            <br>
            <input type="time" name="begintijd">
            <br>
            eindtijd: (format hh:mm)
            <br>
            <input type="time" name="eindtijd">
            <br>
            lokaal:
            <br>
            <input type="text" name="lokaal">
            <br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>