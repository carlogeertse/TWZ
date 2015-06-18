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
        <td>Week <?php echo $week; ?></td>
        <td></td>
        <td>Maandag</td>
        <td>Dinsdag</td>
        <td>Woensdag</td>
        <td>Donderdag</td>
        <td>Vrijdag</td>
    </tr>
    <?php if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['Voornaam'] . " " . $row['Achternaam'] . "</td>";
            echo "<td> Ochtend </td>";
            for ($day = 1; $day <= 5; $day++) {
                $dagdeel = 'ochtend';
                $date = date('Y-m-d', strtotime($jaar . "W" . $week . $day));
                $checked = isChecked($dagdeel,$row,$date,$conn);
                generateBoxes($date,$row,$dagdeel,$checked);
            }
            //Begin op een nieuwe regel
            echo "</tr><tr><td></td>";
            echo "<td> Middag </td>";
            for ($day = 1; $day <= 5; $day++) {
                $dagdeel = 'middag';
                $date = date('Y-m-d', strtotime($jaar . "W" . $week . $day));
                $checked = isChecked($dagdeel,$row,$date,$conn);
                generateBoxes($date,$row,$dagdeel,$checked);
            }
            //Begin op een nieuwe regel
            echo "</tr><tr><td></td>";
            echo "<td> Avond </td>";
            for ($day = 1; $day <= 5; $day++) {
                $dagdeel = 'avond';
                $date = date('Y-m-d', strtotime($jaar . "W" . $week . $day));
                $checked = isChecked($dagdeel,$row,$date,$conn);
                generateBoxes($date,$row,$dagdeel,$checked);
            }
            echo "</tr>";
        }
    } ?>
</table>


<?php
    function generateBoxes($date,$row,$dagdeel,$checked)
    {
        if($checked) {
            echo '<td><input type="checkbox" name=' . $date . ' value=' . $dagdeel . '-' . $row['pers_nummer'] . '" checked></td>';
        }
        else {
            echo '<td><input type="checkbox" name=' . $date . ' value=' . $dagdeel . '-' . $row['pers_nummer'] . '"></td>';
        }
    }

    function isChecked($dagdeel,$row,$date,$conn)
    {
        $boxsql = 'SELECT '.$dagdeel.'
                   FROM    beschikbaarheid
                   WHERE   pers_nummer = '.$row['pers_nummer'].'
                   AND	   datum = "' . $date . '"';
        $result = $conn->query($boxsql);
        while ($row = $result->fetch_assoc())
        {
            if($row[$dagdeel] == 1)
            {
                return true;
            }
            else{
                return false;
            }
        }
    }
?>
<script src="js/checkboxScript.js"></script>

</body>
</html>