<!DOCTYPE html>
<?php
    include ("connectDB.php");

    $sql = "SELECT Achternaam, Voornaam
            FROM Surveillant
            ORDER BY Achternaam;";
    $conn->query($sql);
?>
<html>
    <head>
        <title>
            Homepage
        </title>
        <link rel = "stylesheet" type = "text/css" href = "Style.css">
    </head>

    <body>
        <?php include("Menu.php"); ?>
        <h1>
            Alle huidig bestaande surveillanten voor TWZ:
        </h1>

        <h3>
            Welke surveillant wilt u verwijderen?
        </h3>
        <select name = "surveillanten">
            <?php
                if ($academies->num_rows > 0) {
                    while ($row = $academies->fetch_assoc()) {
                        echo "<option>" . $row['naam'] . "</option>";
                    }
                }
            ?>
        </select>
    </body>
</html>