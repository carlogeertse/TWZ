<!DOCTYPE html>
<?php include ("connectDB.php"); ?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $sql = "INSERT INTO surveillanten(Voornaam, Achternaam, adres, postcode, rekening_nummer, telefoon, email)
				VALUES('".$_POST['Voornaam']."',
            '".$_POST['Achternaam']."',
            '".$_POST['Adres']."',
            '".$_POST['Postcode']."',
            '".$_POST['Rekeningnummer']."',
            '".$_POST['Telefoonnummer']."',
            '".$_POST['E-mailadres']."');";
        
        $conn->query($sql);
        echo $conn->connect_error;
    }
?>
<html>
    <head>
        <title>
            Rooster van de surveillanten
        </title>
        <link rel = "stylesheet" type = "text/css" href = "Style.css">
    </head>

    <body>
        <?php
            include("Menu.php");
        ?>
        <h1>
            Invoeren surveillanten
        </h1>
        <table>
            <form method = "post" action="survInvoeren.php">
                <tr>
                    <td>
                        Voornaam:
                    </td>
                    <td>
                        <input type="text" name="Voornaam" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Achternaam:
                    </td>
                    <td>
                        <input type="text" name="Achternaam" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Adres:
                    </td>
                    <td>
                        <input type="text" name="Adres" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Postcode:
                    </td>
                    <td>
                        <input type="text" name="Postcode" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Rekeningnummer:
                    </td>
                    <td>
                        <input type="text" name="Rekeningnummer" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Telefoonnummer:
                    </td>
                    <td>
                        <input type="text" name="Telefoonnummer" pattern="^\d{4}-\d{6} | \d{2}-\d{8}" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        E-mailadres:
                    </td>
                    <td>
                        <input type="email" name="E-mailadres" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Submit" name = "submit">
                    </td>
                </tr>
            </form>
        </table>
    </body>
</html>