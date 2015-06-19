<!DOCTYPE html>
<?php include("connectDB.php"); ?>
<html>
<head>
    <title>
        Rooster
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>

<body style = "background-image: url(src/download.jpg); position: relative; background-size: cover;">
<?php include("Menu.php"); ?>
<h1 style = "text-align: center;">
    Hier kunt u een tentamen verwijderen:
</h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sqlDelete = "DELETE FROM tentamen WHERE toets_ID = '" . $_POST['tentamen'] . "';";
    $sqlDelete = $conn->query($sqlDelete);
    echo"succesvol verwijdert";
}
?>
<form action="tentVerwijderen.php" method="post">
    <table>
        <tr>
            <td>
                <select name="tentamen">
                    <?php
                    $sql = "SELECT T.omschrijving, T.academie_ID, T.toets_ID, T.datum, T.begin_tijd, T.eind_tijd, A.naam AS academie
                              FROM tentamen AS T, academie AS A
                              WHERE T.academie_ID = A.academie_ID
                              ORDER BY omschrijving;";
                    $sql = $conn->query($sql);
                    if ($sql->num_rows > 0) {
                        while ($row = $sql->fetch_assoc()) {
                            echo '<option value = ' . $row['toets_ID'] . '>' . $row['academie'] . ', ' . $row['datum'] . ',  ' . $row['begin_tijd'] . ' tot ' . $row['eind_tijd'] . '</option>';
                        }
                    }
                    ?>
                </select>
            </td>
            <td>
                <input type="submit" value="Verwijder tentamen">
            </td>
        </tr>
    </table>
</body>
</html>