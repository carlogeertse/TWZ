<!DOCTYPE html>
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
            <form>
                <tr>
                    <td>
                        Voornaam:
                    </td>
                    <td>
                        <input type = "text" id = "Voornaam" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Achternaam:
                    </td>
                    <td>
                        <input type = "text" id = "Achternaam" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Straatnaam:
                    </td>
                    <td>
                        <input type = "text" id = "Straatnaam" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Huisnummer:
                    </td>
                    <td>
                        <input type = "text" id = "Huisnummer" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Postcode:
                    </td>
                    <td>
                        <input type = "text" id = "Postcode" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Stad:
                    </td>
                    <td>
                        <input type = "text" id = "Stad" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Rekeningnummer:
                    </td>
                    <td>
                        <input type = "text" id = "Rekeningnummer" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Telefoonnummer:
                    </td>
                    <td>
                        <input type = "text" id = "Telefoonnummer" pattern = "^\d{3}-\d{6}" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        E-mailadres:
                    </td>
                    <td>
                        <input type = "email" id = "E-mailadres" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type = "button" value = "Submit">
                    </td>
                </tr>
            </form>
        </table>
    </body>
</html>