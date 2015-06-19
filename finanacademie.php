<!DOCTYPE html>
<?php include ("connectDB.php"); ?>
<html>
<head>
    <title>
        Rooster
    </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body style = "background-image: url(src/download.jpg); position: relative; background-size: cover;">
<style type = "text/css">
    #spaceUnder > td {
        padding-bottom: 1em;
    }
</style>
<?php include("Menu.php"); ?>
<h1 align = "center">
    Tentamens met academie per surveillant:
</h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sqli = "SELECT *
        FROM tentamen
        WHERE pers_nummer = " .$_POST['pers_nummer']. "
        AND datum BETWEEN'" .$_POST['begin']. "' AND '" .$_POST['eind']. "'";
    $tentamens = $conn->query($sqli);
    if($tentamens->num_rows > 0) {
        echo "<table border='widefat'>
        <tr>
            <th>surveillant</th><th>datum</th><th>begintijd</th><th>eindtijd</th><th>lokaal</th><th>omschrijving</th><th>uren</th>
        </tr>";
        while ($row = $tentamens->fetch_assoc()) {
            $begintijd = $row['begin_tijd']; // bijv: 2012-06-27 10:00:00
            $eindtijd = $row['eind_tijd']; // bijv: 2012-06-27 17:30:00
            $voorbereiding = 1800; // bijv: 0.5

            $gewerkteuren = ((strtotime($eindtijd) - strtotime($begintijd) + $voorbereiding) / 3600);


            echo "<tr>
            <td></td><td>" . $row['datum'] . "</td><td>" . $row['begin_tijd'] . "</td><td>" . $row['eind_tijd'] . "</td><td>" . $row['lokaal'] . "</td><td>" . $row['omschrijving'] . "</td><td>" . $gewerkteuren . "</td>
        </tr>";
        }
        echo "</table>";

    }else{
        echo"er zijn geen toetsen";
    }

}
$sql = "SELECT *
            FROM surveillanten";
$academies = $conn->query($sql);

?>
<form action="finanacademie.php" method="POST">
    <table>
        <tr id = "spaceUnder">
            <td>
                surveillant:
            </td>
            <td>
                <select style = "height: 25px;" name="pers_nummer">
                    <?php if ($academies->num_rows > 0) {
                        while ($row = $academies->fetch_assoc()) {
                            echo '<option value=' . $row['pers_nummer'] . '>' . $row['Tussenvoegsel'] . ' ' . $row['Achternaam'] . ', ' . $row['Voornaam'] . '</option>';
                        }
                    }
                    ?>
                    Selecteer een week:
                </select>
            </td>
        </tr>
        <tr id = "spaceUnder">
            <td>
                Begin datum:
            </td>
            <td>
                <input style = "height: 25px;" type="date" name="begin">
            </td>
        </tr>
        <tr id = "spaceUnder">
            <td>
                Eind datum:
            </td>
            <td>
                <input style = "height: 25px;" type="date" name="eind">
            </td>
        </tr>
        <tr id = "spaceUnder">
            <td>
                <input type="submit" value="Submit">
            </td>
        </tr>
    </table>
</form>
