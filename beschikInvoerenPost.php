<!DOCTYPE html>
<?php include("connectDB.php"); ?>
<html>
<head>
    <title>
        Beschikbaarheid
    </title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>
<?php include("Menu.php"); ?>

<h1>
    <b>
        Invoeren Beschikbaarheid
    </b>
</h1>

<?php
$weekarray = explode("-W", $_POST['week']);
$week = $weekarray[1];
$jaar = $weekarray[0];
$sql = "SELECT Voornaam, Achternaam, pers_nummer
        FROM surveillanten";
$result = $conn->query($sql);
?>

<table>
    <tr>
        <td></td>
        <td></td>
        <?php
        $week_number = 0;
        for ($day = 1; $day <= 5; $day++) {
            echo "<td>" . date('d/m/Y', strtotime($jaar . "W" . $week . $day)) . "</td>";
        }
        ?>
    </tr>
    <?php if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['Voornaam'] . " " . $row['Achternaam'] . "</td>";
            echo "<td> Ochtend </td>";
            for ($day = 1; $day <= 5; $day++) {
                echo '<td><input type="checkbox" name=' . date('Y-m-d', strtotime($jaar . "W" . $week . $day)) . ' value="ochtend-' . $row['pers_nummer'] . '"></td>';
            }
            //Begin op een nieuwe regel
            echo "</tr><tr><td></td>";
            echo "<td> Middag </td>";
            for ($day = 1; $day <= 5; $day++) {
                echo '<td><input type="checkbox" name=' . date('Y-m-d', strtotime($jaar . "W" . $week . $day)) . ' value="middag-' . $row['pers_nummer'] . '"></td>';
            }
            //Begin op een nieuwe regel
            echo "</tr><tr><td></td>";
            echo "<td> Avond </td>";
            for ($day = 1; $day <= 5; $day++) {
                echo '<td><input type="checkbox" name=' . date('Y-m-d', strtotime($jaar . "W" . $week . $day)) . ' value="avond-' . $row['pers_nummer'] . '"></td>';
            }
            echo "</tr>";
        }
    } ?>
</table>

<div id="textDiv"></div>

<script src="js/checkboxScript.js"></script>

</body>
</html>