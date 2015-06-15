<!DOCTYPE html>
<?php include ("connectDB.php"); ?>
<?php

    $firstname = mysql_real_escape_string ($_POST['Voornaam']);
    $lastname = mysql_real_escape_string ($_POST['Achternaam']);
    $address = mysql_real_escape_string ($_POST['Adres']);
    $zipcode = mysql_real_escape_string ($_POST['Postcode']);
    $bankaccount = mysql_real_escape_string ($_POST['Rekeningnummer']);
    $phonenumber = mysql_real_escape_string ($_POST['Telefoonnummer']);
    $email = mysql_real_escape_string ($_POST['E-mailadres']);

    $sql = "INSERT INTO 'surveillanten' ('Voornaam', 'Achternaam', 'adres',
                                          'postcode', 'rekening_nummer', 'telefoon', 'e-mail')
            VALUES ('$firstname', '$lastname', '$address', '$zipcode', '$bankaccount', '$phonenumber', '$email');";
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
            <form method = "post" action="<?php $_PHP_SELF ?>">
                <tr>
                    <td>
                        Voornaam:
                    </td>
                    <td>
                        <input type="text" id="Voornaam" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Achternaam:
                    </td>
                    <td>
                        <input type="text" id="Achternaam" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Adres:
                    </td>
                    <td>
                        <input type="text" id="Adres" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Postcode:
                    </td>
                    <td>
                        <input type="text" id="Postcode" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Rekeningnummer:
                    </td>
                    <td>
                        <input type="text" id="Rekeningnummer" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Telefoonnummer:
                    </td>
                    <td>
                        <input type="text" id="Telefoonnummer" pattern="^\d{3}-\d{6}" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        E-mailadres:
                    </td>
                    <td>
                        <input type="email" id="E-mailadres" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </form>
        </table>
    </body>
</html>