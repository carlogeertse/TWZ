<!DOCTYPE html>
<?php include("connectDB.php"); ?>
<html>
<head>
    <title>
        Rooster van de surveillanten
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>

<body style = "background-image: url(download.jpg); position: relative; background-size: cover;">
<style type = "text/css">
    #spaceUnder > td {
        padding-bottom: 1em;
    }
</style>
<?php
include("Menu.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sqli = "INSERT INTO tentamen(academie_ID, datum, begin_tijd, eind_tijd, lokaal, omschrijving)
                                 VALUES ('" . $_POST['academie'] . "',
                                         '" . $_POST['datum'] . "',
                                         '" . $_POST['begintijd'] . "',
                                         '" . $_POST['eindtijd'] . "',
                                         '" . $_POST['lokaal'] . "',
                                         '" . $_POST['omschrijving'] . "');";
    $conn->query($sqli);
    echo "<h2>Tentamen toegevoegd!</h2>";
}
    ?>
    <h1>
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
                    <select name="academie">
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
                    <input type = "date" name = "datum">
                </td>
            </tr>
            <tr id = "spaceUnder">
                <td>
                    Begintijd:
                </td>
                <td>
                    <input type="time" name="begintijd">
                </td>
            </tr>
            <tr id = "spaceUnder">
                <td>
                    Eindtijd:
                </td>
                <td>
                    <input type="time" name="eindtijd">
                </td>
            </tr>
            <tr id = "spaceUnder">
                <td>
                    Lokaal:
                </td>
                <td>
                    <input type="text" name="lokaal">
                </td>
            </tr>
            <tr id = "spaceUnder">
                <td>
                    Omschrijving:
                </td>
                <td>
                    <input type="text" name="omschrijving">
                </td>
            </tr>
            <tr>
                <td>
                    <input type = "submit" value = "Submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>