<?php
    include ('connectDB.php');
?>
<html>
    <head>
        <title>
            Bewerken surveillant
        </title>
    </head>

    <body style = "background-image: url(src/download.jpg); position: relative; background-size: cover;">
    <?php
    include ('menu.php');
    ?>
        <h1 style = "text-align: center;">
            Kies een surveillant om te bewerken:
        </h1>


        <form method = "post" action = "bewerkenSurveillant.php">
            <select name = "pers_nummer">
                <?php
                    $sqlSurv = "SELECT Tussenvoegsel, Achternaam, Voornaam, telefoon, email, pers_nummer
                                FROM surveillanten
                                ORDER BY Achternaam;";
                    $result = $conn->query($sqlSurv);
                    if ($result-> num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value = " . $row['pers_nummer'] . ">" . $row['Tussenvoegsel'] . " " . $row['Achternaam'] . ", " . $row['Voornaam'] ." </option>";
                        }
                    }
                ?>
            </select>
                <input type = "submit" value = "Bewerk surveillant">
        </form>

    </body>
</html>