<!DOCTYPE html>
<?php include("connectDB.php"); ?>
<html>
    <head>
        <title>
            Rooster van de surveillanten
        </title>
        <link rel="stylesheet" type="text/css" href="Style.css">
    </head>

    <body>
        <?php
            include("Menu.php");
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $sqlID = "SELECT academie_ID
                         FROM academie
                         WHERE naam ='" . $_POST['academie'] . "'";
                $result=$conn->query($sqlID);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                        $sqli = "INSERT INTO tentamen(academie_ID, datum, begin_tijd, eind_tijd, lokaal)
                                 VALUES ('" . $row['academie_ID'] . "',
                                         '" . $_POST['datum'] . "',
                                         '" . $_POST['begintijd'] . "',
                                         '" . $_POST['eindtijd'] . "',
                                         '" . $_POST['lokaal'] . "');";
                        $conn->query($sqli);
                    }
                }
            } else {
        ?>
        <h1>
            Invoeren tentamens
        </h1>

        <h3>
            Invoeren van tentamens op het rooster. Hier worden alle tentamens ingeroosterd.
        </h3>
        <?php
            $sql = "SELECT *
                    FROM academie";
            $academies = $conn->query($sql);
        ?>
        <form action="tentInvoeren.php" method="POST">
            <br>
                Academie:
            <br>
            <select name="academie">
                <?php if ($academies->num_rows > 0) {
                    while ($row = $academies->fetch_assoc()) {
                        echo "<option>" . $row['naam'] . "</option>";
                    }
                }
                ?>
            </select>
            <br>
            Datum: (format dd-mm-jjjj)
            <br>
            <input type="date" name="datum">
            <br>
            Begintijd: (format hh:mm)
            <br>
            <input type="time" name="begintijd">
            <br>
            Eindtijd: (format hh:mm)
            <br>
            <input type="time" name="eindtijd">
            <br>
            Lokaal:
            <br>
            <input type="text" name="lokaal">
            <br>
            <input type="submit" value="Submit">
        </form>
        <?php
            }
        ?>
    </body>
</html>