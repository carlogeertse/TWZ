<!DOCTYPE html>
<?php include("connectDB.php"); ?>
<html>
    <head>
        <title>
            Rooster van de surveillanten
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
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

                $sql = "INSERT INTO surveillanten(Voornaam, Achternaam, adres, postcode, rekening_nummer, telefoon, email)
                            VALUES('" . $_POST['Voornaam'] . "',
                        '" . $_POST['Achternaam'] . "',
                        '" . $_POST['Adres'] . "',
                        '" . $_POST['Postcode'] . "',
                        '" . $_POST['Rekeningnummer'] . "',
                        '" . $_POST['Telefoonnummer'] . "',
                        '" . $_POST['E-mailadres'] . "');";

                $conn->query($sql);
                echo $conn->connect_error;
                echo "<h3>Surveillant toegevoegd!</h3>";
            }
        ?>
        <h1>
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
                        Adres:
                    </td>
                    <td>
                        <input type="text" name="Adres" required>
                    </td>
                </tr>
                <tr id = "spaceUnder">
                    <td>
                        Postcode:
                    </td>
                    <td>
                        <input type="text" name="Postcode" required>
                    </td>
                </tr>
                <tr id = "spaceUnder">
                    <td>
                        Rekeningnummer:
                    </td>
                    <td>
                        <input type="text" name="Rekeningnummer" required>
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