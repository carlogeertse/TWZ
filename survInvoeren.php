<!DOCTYPE html>
<?php include("connectDB.php"); ?>
<html>
    <head>
        <title>
            Rooster van de surveillanten
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    </head>

    <body style = "background-image: url(src/download.jpg); position: relative; background-size: cover;">
        <style type = "text/css">
            #spaceUnder > td {
                padding-bottom: 1em;
            }
        </style>
        <?php
            include("Menu.php");
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $sql = "INSERT INTO surveillanten(Voornaam, Tussenvoegsel, Achternaam, telefoon, email)
                            VALUES(?,?,?,?,?)";

                $stmt = $conn->prepare($sql);
                $voornaam = $_POST['Voornaam'];
                $tussenvoegsel = $_POST['Tussenvoegsel'];
                $achternaam = $_POST['Achternaam'];
                $telefoonnummer = $_POST['Telefoonnummer'];
                $mail = $_POST['mailadres'];
                $stmt->bind_param("sssss", $voornaam, $tussenvoegsel, $achternaam, $telefoonnummer, $mail);
                $stmt->execute();
                echo "<h3>Surveillant toegevoegd!</h3>";
            }
        ?>
        <h1 style = "text-align: center;">
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
                        Tussenvoegsel:
                    </td>
                    <td>
                        <input type="text" name="Tussenvoegsel">
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
                        <input type="email" name="mailadres" required>
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