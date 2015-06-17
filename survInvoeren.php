<!DOCTYPE html>
<?php include("connectDB.php"); ?>
<html>
    <head>
        <title>
            Rooster van de surveillanten
        </title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body style = "background-image: url(download.jpg); position: relative; background-size: cover;">
        <style type = "text/css">
            #spaceUnder > td {
                padding-bottom: 1em;
            }
        </style>
        <?php
            include("Menu.php");
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $sql = "INSERT INTO surveillanten(Voornaam, Achternaam, telefoon, email)
                            VALUES('" . $_POST['Voornaam'] . "',
                        '" . $_POST['Achternaam'] . "',
                        '" . $_POST['Telefoonnummer'] . "',
                        '" . $_POST['E-mailadres'] . "');";

                $conn->query($sql);
                echo $conn->connect_error;
                echo "<h3>Surveillant toegevoegd!</h3>";
            }
        ?>
        <h1 align = "center">
            Invoeren surveillanten
        </h1>
        <table>
            <form method="post" action="survInvoeren.php">
                <tr id = "spaceUnder">
                    <td>
                        Voornaam:
                    </td>
                    <td>
                        <input type="text" name="Voornaam" required>
                    </td>
                </tr>
                <tr id = "spaceUnder">
                    <td>
                        Achternaam:
                    </td>
                    <td>
                        <input type="text" name="Achternaam" required>
                    </td>
                </tr>
                <tr id = "spaceUnder">
                    <td>
                        Telefoonnummer:
                    </td>
                    <td>
                        <input type="text" name="Telefoonnummer" pattern="\d+" required>
                    </td>
                </tr>
                <tr id = "spaceUnder">
                    <td>
                        E-mailadres:
                    </td>
                    <td>
                        <input type="email" name="E-mailadres" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Submit" name="submit">
                    </td>
                </tr>
            </form>
        </table>
    </body>
</html>