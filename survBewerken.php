<?php
include('connectDB.php');
?>
<html>
<head>
    <title>
        Bewerken surveillant
    </title>
</head>

<body style="background-image: url(src/download.jpg); position: relative; background-size: cover;">
<?php
include('menu.php');

if (isset($_POST['pers_nummer'])) {
    $sqlLid = "SELECT Tussenvoegsel, Achternaam, Voornaam, telefoon, email, pers_nummer
               FROM surveillanten
               WHERE pers_nummer = '" . $_POST['pers_nummer'] . "'
               ORDER BY Achternaam";
    $result = $conn->query($sqlLid);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            ?>
            <form method="post">
                <table>
                    <tr id="spaceUnder">
                        <td>voornaam:</td><td><input type="text" name="voornaam" value='<?php echo $row['Voornaam'] ?>'/></td>
                    </tr>
                    <tr id="spaceUnder">
                        <td>tussenvoegsel:</td><td><input type="text" name="tussenvoegsel" value='<?php echo $row['Tussenvoegsel'] ?>'/></td>
                    </tr>
                    <tr id="spaceUnder">
                        <td>achternaam:</td><td><input type="text" name="achternaam" value='<?php echo $row['Achternaam'] ?>'/></td>
                    </tr>
                    <tr id="spaceUnder">
                        <td>telefoonnummer:</td><td><input type="text" name="telefoon" value='<?php echo $row['telefoon'] ?>'/></td>
                    </tr>
                    <tr id="spaceUnder">
                        <td>E-mailadres:</td><td><input type="text" name="email" value='<?php echo $row['email'] ?>'/></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Bijwerken"/>
                        </td>
                    </tr>
                </table>
            </form>
        <?php
        }
    }
}

elseif(isset($_POST['whatevertheaanpasformuliergivesu']))
{
//de update statement
}
else {
?>
<h1 style="text-align: center;">
    Kies een surveillant om te bewerken:
</h1>


<form method="post">
    <select name="pers_nummer">
        <?php
        $sqlSurv = "SELECT *
                                FROM surveillanten
                                ORDER BY Achternaam;";
        $result = $conn->query($sqlSurv);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<option value = " . $row['pers_nummer'] . ">" . $row['Voornaam'] . " " . $row['Tussenvoegsel'] . " " . $row['Achternaam'] . "  </option>";
            }
        }
        ?>
    </select>
    <input type="submit" value="Bewerk surveillant">
</form>
<?php
}
?>

</body>
</html>