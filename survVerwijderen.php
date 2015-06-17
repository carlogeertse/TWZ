<!DOCTYPE html>
<?php
    include ("connectDB.php");
?>
<html>
    <head>
        <title>
            Verwijderen surveillant
        </title>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    </head>

    <body style = "background-image: url(download.jpg); position: relative; background-size: cover;>
        <?php include ("Menu.php"); ?>

        <h1>
            Welke Surveillant wilt u verwijderen?
        </h1>

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $sqlDelete = "DELETE FROM surveillanten WHERE pers_nummer = '" . $_POST['surveillanten'] . "';";
                $sqlDelete = $conn->query($sqlDelete);
            }
        ?>
        <form action = "survVerwijderen.php" method = "post">
            <table>
                <tr>
                    <td>
                        <select name = "surveillanten">
                            <?php
                                $sql = "SELECT Achternaam, Voornaam, pers_nummer FROM surveillanten ORDER BY Achternaam;";
                                $sql = $conn->query($sql);
                                if ($sql-> num_rows > 0) {
                                    while ($row = $sql->fetch_assoc()) {
                                        echo '<option value = ' . $row['pers_nummer'] . '>' . $row['Achternaam'] . ', ' . $row['Voornaam'] . '</option>';
                                    }
                                }
                            ?>
                        </select>
                    </td>
                    <td>
                        <input type = "submit" value = "Verwijder Surveillant">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>