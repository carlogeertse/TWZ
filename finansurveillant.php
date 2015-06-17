<!DOCTYPE html>
<?php include ("connectDB.php"); ?>
<html>
<head>
    <title>
        Rooster
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>

<body style = "background-image: url(download.jpg); position: relative; background-size: cover;">
<style type = "text/css">
    #spaceUnder > td {
        padding-bottom: 1em;
    }
</style>
<?php include("Menu.php"); ?>
<h1>
    tentamens met surveillanten per academie:
</h1>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sqli = "SELECT *
        FROM tentamen
        WHERE academie_ID = " .$_POST['academie']. "
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
            FROM academie";
    $academies = $conn->query($sql);

    ?>
    <form action="finansurveillant.php" method="POST">
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
                        Selecteer een week:
                    </select>
                </td>
            </tr>
            <tr id = "spaceUnder">
                <td>
                    Begin datum:
                </td>
                <td>
                    <input type="date" name="begin">
                </td>
            </tr>
            <tr id = "spaceUnder">
                <td>
                    Eind datum:
                </td>
                <td>
                    <input type="date" name="eind">
                </td>
            </tr>
            <tr id = "spaceUnder">
                <td>
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
