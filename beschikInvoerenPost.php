<!DOCTYPE html>
<?php include("connectDB.php"); ?>
<html>
    <head>
        <title>
            Beschikbaarheid
        </title>
        <link rel="stylesheet" type="text/css" href="Style.css">
    </head>

  <body style = "background-image: url(src/download.jpg); position: relative; background-size: cover;">
        <?php include("Menu.php"); ?>

        <h1>
            Invoeren Beschikbaarheid
        </h1>

    <?php
        $weekarray = explode("-W", $_POST['week']);
        $week = $weekarray[1];
        $jaar = $weekarray[0];
        $sql = "SELECT Voornaam, Tussenvoegsel, Achternaam, pers_nummer
                FROM surveillanten
                ORDER BY Achternaam ASC";
        $result = $conn->query($sql);
    ?>

        <table data-toggle = "table" border = "1" style = "margin-left: auto; margin-right: auto;">
            <tr>
                <td style = "text-align: center;"><b>Week <?php echo $week; ?></b></td>
                <td></td>
                <td style = "text-align: center;">Maandag</td>
                <td style = "text-align: center;">Dinsdag</td>
                <td style = "text-align: center;">Woensdag</td>
                <td style = "text-align: center;">Donderdag</td>
                <td style = "text-align: center;">Vrijdag</td>
            </tr>
            <?php if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td style = 'width: 25%; text-align: center;'>" . $row['Achternaam'] . " " . $row['Tussenvoegsel'] . ", " . $row['Voornaam'] . "</td>";
                    echo "<td style = 'width: 20%; text-align: center;'> Ochtend </td>";
                    for ($day = 1; $day <= 5; $day++) {
                        $dagdeel = 'ochtend';
                        $date = date('Y-m-d', strtotime($jaar . "W" . $week . $day));
                        $checked = isChecked($dagdeel,$row,$date,$conn);
                        generateBoxes($date,$row,$dagdeel,$checked);
                    }
                    //Begin op een nieuwe regel
                    echo "</tr><tr><td></td>";
                    echo "<td style = 'width: 20%; text-align: center;'> Middag </td>";
                    for ($day = 1; $day <= 5; $day++) {
                        $dagdeel = 'middag';
                        $date = date('Y-m-d', strtotime($jaar . "W" . $week . $day));
                        $checked = isChecked($dagdeel,$row,$date,$conn);
                        generateBoxes($date,$row,$dagdeel,$checked);
                    }
                    //Begin op een nieuwe regel
                    echo "</tr><tr><td></td>";
                    echo "<td style = 'width: 20%; text-align: center;'> Avond </td>";
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
                    echo '<td style = "width: 10%; text-align: center;"><input type="checkbox" name=' . $date . ' value=' . $dagdeel . '-' . $row['pers_nummer'] . '" checked></td>';
                }
                else {
                    echo '<td style = "width: 10%; text-align: center;"><input type="checkbox" name=' . $date . ' value=' . $dagdeel . '-' . $row['pers_nummer'] . '"></td>';
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