<!DOCTYPE html>
<?php include ("connectDB.php"); ?>
<html>
    <head>
        <title>
            Rooster
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    </head>

    <body style = "background-image: url(src/download.jpg); position: relative; background-size: cover;">
        <?php include("Menu.php");
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            echo "hoi";
        }

        ?>
        <h1>
            Hier ziet u de huidig beschikbare roosters:
        </h1>
        <?php
            $weekarray = explode("-W", $_POST['week']);
            $week = $weekarray[1];
            $jaar = $weekarray[0];

            $sql= "SELECT T.toets_ID, T.pers_nummer, T.datum, T.begin_tijd, T.eind_tijd, T.lokaal, T.omschrijving, A.naam AS academie
                    FROM tentamen AS T, academie as A
                    WHERE A.academie_ID = T.academie_ID
                    AND T.datum BETWEEN'".date("Y-m-d", strtotime($jaar."W".$week."1"))."' AND '".date('Y-m-d', strtotime($jaar."W".$week."5"))."'";
            $result = $conn->query($sql);

            $surveillantensql = "SELECT Voornaam, Tussenvoegsel, Achternaam, pers_nummer
                                 FROM   surveillanten;";

            $surveillantenresult = $conn->query($surveillantensql);

            if($result->num_rows > 0){
                echo "<form method='post' action='tentamenrooster.php'>;
                <table border='widefat'>
                    <tr>
                        <th>academie</th>
                        <th>surveillant</th>
                        <th>datum</th>
                        <th>begintijd</th>
                        <th>eindtijd</th>
                        <th>lokaal</th>
                        <th>omschrijving</th>
                    </tr>";
                while($row = $result->fetch_assoc()){
                    echo"<tr>
                        <td>".$row['academie']."</td>
                        <td>
                        <select name=".$row['toets_ID'].">
                            ";
                    if($surveillantenresult->num_rows > 0)
                    {
                        while($survrow = $surveillantenresult->fetch_assoc()){
                            echo "<option value=".$survrow['pers_nummer'].">".$survrow['Voornaam']." ".$survrow['Tussenvoegsel']." ".$survrow['Achternaam']."</option>";
                        }
                    }
                        echo "
                        </select>
                        </td>
                        <td>".$row['datum']."</td>
                        <td>".$row['begin_tijd']."</td>
                        <td>".$row['eind_tijd']."</td>
                        <td>".$row['lokaal']."</td>
                        <td>".$row['omschrijving']."</td>
                    </tr>";
                }
                echo"</table>";


            } else {
                echo"<h2>geen toetsen deze week</h2>";
            }

    function tijdNaarDagdeel($begintijd,$eindtijd)
    {

    }

        ?>
    </body>
</html>