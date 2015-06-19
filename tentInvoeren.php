<!DOCTYPE html>
<?php include("connectDB.php"); ?>
<html>
    <head>
        <title>
            Toevoegen tentamen
        </title>
    </head>

    <body style = "background-image: url(src/download.jpg); position: relative; background-size: cover;">
    <style type = "text/css">
        #spaceUnder > td {
            padding-bottom: 1em;
        }
    </style>
    <?php
    include("Menu.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sqli = "INSERT INTO tentamen(academie_ID, datum, begin_tijd, eind_tijd, lokaal, omschrijving)
                                     VALUES (?,?,?,?,?,?)";
        $stmt = $conn->prepare($sqli);
        $academie = $_POST['academie'];
        $datum = $_POST['datum'];
        $begintijd = $_POST['begintijd'];
        $eindtijd = $_POST['eindtijd'];
        $lokaal = $_POST['lokaal'];
        $omschrijving = $_POST['omschrijving'];
        $stmt->bind_param("ssssss", $academie, $datum, $begintijd, $eindtijd, $lokaal, $omschrijving);
        $stmt->execute();
        echo "<h2>Tentamen toegevoegd!</h2>";
    }
        ?>
        <h1 style = "text-align: center;">
            Invoeren tentamens
        </h1>
        <?php
        $sql = "SELECT *
                FROM academie";
        $academies = $conn->query($sql);
        ?>
        <form action="tentInvoeren.php" method="POST">
            <table>
                <tr id = "spaceUnder">
                    <td>
                        Academie:
                    </td>
                    <td>
                        <select style = "height: 25px;" name="academie">
                            <?php if ($academies->num_rows > 0) {
                                while ($row = $academies->fetch_assoc()) {
                                    echo '<option value=' . $row['academie_ID'] . '>' . $row['naam'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr id = "spaceUnder">
                    <td>
                        Datum:
                    </td>
                    <td>
                        <input style = "height: 25px;" type="date" name="datum" required>
                    </td>
                </tr>
                <tr id = "spaceUnder">
                    <td>
                        Begintijd:
                    </td>
                    <td>
                        <input style = "height: 25px;" type="time" name="begintijd" required>
                    </td>
                </tr>
                <tr id = "spaceUnder">
                    <td>
                        Eindtijd:
                    </td>
                    <td>
                        <input style = "height: 25px;" type="time" name="eindtijd" required>
                    </td>
                </tr>
                <tr id = "spaceUnder">
                    <td>
                        Lokaal:
                    </td>
                    <td>
                        <input style = "height: 25px;" type="text" name="lokaal" required>
                    </td>
                </tr>
                <tr id = "spaceUnder">
                    <td>
                        Omschrijving:
                    </td>
                    <td>
                        <input style = "height: 25px;" type="text" name="omschrijving" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type = "submit" value = "Invoeren">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>