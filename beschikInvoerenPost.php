<!DOCTYPE html>
<?php include ("connectDB.php"); ?>
<html>
<head>
    <title>
        Beschikbaarheid
    </title>
    <link rel = "stylesheet" type = "text/css" href = "Style.css">
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
$sql = "SELECT Voornaam, Achternaam
        FROM surveillanten";
$result = $conn->query($sql);
?>

<table>
    <tr>
        <td></td>
        <td></td>
        <?php
        $week_number = 0;
        for($day=1; $day<=7; $day++)
        {
            echo "<td>".date('m/d/Y', strtotime($jaar."W".$week.$day))."</td>";
        }
        ?>
    </tr>
    <?php if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            echo "<tr><td>".$row['Voornaam']." ".$row['Achternaam']."</td>";
            echo "<td> Ochtend </td>";
            for($i=0; $i<7; $i++)
            {
                echo '<td><input type="checkbox" name="'.$row['Voornaam'].' '.$row['Achternaam'].$i.'o"></td>';
            }
            //Begin op een nieuwe regel
            echo "</tr><tr><td></td>";
            echo "<td> Middag </td>";
            for($i=0; $i<7; $i++)
            {
                echo '<td><input type="checkbox" name="'.$row['Voornaam'].' '.$row['Achternaam'].$i.'o"></td>';
            }
            echo "</tr><tr><td></td>";
            echo "<td> Avond </td>";
            for($i=0; $i<7; $i++)
            {
                echo '<td><input type="checkbox" name="'.$row['Voornaam'].' '.$row['Achternaam'].$i.'o"></td>';
            }
            echo "</tr>";
        }
    }?>
</table>

</body>
</html>