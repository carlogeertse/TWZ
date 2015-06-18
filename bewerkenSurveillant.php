<?php
include('connectDB.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>
        Bewerken surveillant
    </title>
</head>

<body style="background-image: url(src/download.jpg); position: relative; background-size: cover;">
<?php
include('menu.php');
$sqlLid = "SELECT Tussenvoegsel, Achternaam, Voornaam, telefoon, email, pers_nummer
               FROM surveillanten
               WHERE pers_nummer = '" . $_POST['pers_nummer'] . "'
               ORDER BY Achternaam";
$result = $conn->query($sqlLid);
echo $sqlLid;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()){

?>
<form method="post" action="bewerkenSurveillant.php">
    <table>
        <tr id="spaceUnder">
            <td>
                Voornaam:
            </td>
            <td>
                <input type="text" name="voornaam" value= <?php echo $row['Voornaam'] ?>/>
            </td>
        </tr>
        <tr id="spaceUnder">
            <td>
                Tussenvoegsel
            </td>
            <td>
                <input type="text" name="tussenvoegsel" value= <?php echo $row['Tussenvoegsel'] ?>/>
            </td>
        </tr>
        <tr id="spaceUnder">
            <td>
                Achternaam:
            </td>
            <td>
                <input type="text" name="achternaam" value= <?php echo $row['Achternaam'] ?>/>
            </td>
        </tr>
        <tr id="spaceUnder">
            <td>
                Telefoonnummer:
            </td>
            <td>
                <input type="text" name="telefoon" value="<?php echo $row['telefoon'] ?>"/>
            </td>
        </tr>
        <tr id="spaceUnder">
            <td>
                E-mailadres:
            </td>
            <td>
                <input type="text" name="email" value="<?php echo $row['email'] ?>"/>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Bijwerken"/>
            </td>
        </tr>
    </table>
    <?php
    }
    }
    ?>
    <input type="hidden" name="pers_nummer" value="<?php $_POST['pers_nummer'] ?>"/>
</form>
</body>
</html>