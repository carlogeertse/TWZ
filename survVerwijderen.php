<!DOCTYPE html>
<?php
    include ("connectDB.php");
?>
<html>
    <head>
        <title>
            Verwijderen surveillant
        </title>
        <link rel = "stylesheet" type = "text/css" href = "Style.css">
    </head>

    <body>
        <?php include ("Menu.php"); ?>

        <h1>
            Welke Surveillant wilt u verwijderen?
        </h1>

        <select name = "surveillanten">
            <?php
                $sql = "SELECT Achternaam, Voornaam FROM surveillanten ORDER BY Achternaam;";
                $sql = $conn->query($sql);
                if ($sql-> num_rows > 0) {
                    while ($row = $sql->fetch_assoc()) {
                        echo "<option>" . $row['Achternaam'] . ", " . $row['Voornaam'] . "</option>";
                    }
                }
            ?>
        </select>
    </body>
</html>