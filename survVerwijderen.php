<!DOCTYPE html>
<?php
    include ("connectDB.php");
?>
<html>
    <head>
        <title>
            Verwijderen surveillant
        </title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body style = "background-image: url(download.jpg); position: relative; background-size: cover;">
        <?php include ("Menu.php"); ?>

        <h1 align = "center">
            Kies welke surveillant u wilt verwijderen
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