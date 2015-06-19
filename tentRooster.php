<!DOCTYPE html>
<?php include("connectDB.php"); ?>
<html>
<head>
    <title>
        Rooster van de tentamens
    </title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body style="background-image: url(src/download.jpg); position: relative; background-size: cover;">
<?php include("Menu.php"); ?>

<h1 style = "text-align: center;">
    Tentamenrooster
</h1>

<h3> Kies een week </h3>

<form action="tentamenrooster.php" method="POST" div="weekselectform">
    Selecteer een week:
    <input type="week" name="week" class="picker">
    <input type="submit" class="submit"/>
</form>
<script src="js/legeWeekCheck.js"></script>
<?php
$sql = "SELECT T.toets_ID, T.pers_nummer, T.datum, T.begin_tijd, T.eind_tijd, T.lokaal, T.omschrijving, A.naam AS academie
          FROM tentamen AS T, academie as A
          WHERE A.academie_ID = T.academie_ID";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='widefat'>
                    <tr>
                        <th>academie</th><th>surveillant</th><th>datum</th><th>begintijd</th><th>eindtijd</th><th>lokaal</th><th>omschrijving</th>
                    </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                 <td>" . $row['academie'] . "</td><td></td><td>" . $row['datum'] . "</td><td>" . $row['begin_tijd'] . "</td><td>" . $row['eind_tijd'] . "</td><td>" . $row['lokaal'] . "</td><td>" . $row['omschrijving'] . "</td>
             </tr>";
    }
    echo "</table>";
}

?>

</body>
</html>

