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

<?php
    $sqlSurv = "SELECT Tussenvoegsel, Achternaam, Voornaam, pers_nummer
                FROM surveillanten
                ORDER BY Achternaam;";
    $sqlSurv = $conn->query($sqlSurv);
?>
    <form method = "post" action = "">
        <select name = "surveillanten">
            <?php
                if ($sqlSurv-> num_rows > 0) {
                    while ($row = $sqlSurv->fetch_assoc()) {
                        echo "<option value = " . $row['pers_nummer'] . ">" . $row['Tussenvoegsel'] . " " . $row['Achternaam'] . ", " . $row['Voornaam'] . "</option>";
                    }
                }
            ?>
            <input type = "submit" value = "Bewerk surveillant">
        </select>
    </form>
</body>
</html>