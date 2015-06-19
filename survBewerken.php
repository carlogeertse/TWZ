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
                        <td>Voornaam:</td><td><input type="text" name="voornaam" value='<?php echo $row['Voornaam'] ?>'/></td>
                    </tr>
                    <tr id="spaceUnder">
                        <td>Tussenvoegsel:</td><td><input type="text" name="tussenvoegsel" value='<?php echo $row['Tussenvoegsel'] ?>'/></td>
                    </tr>
                    <tr id="spaceUnder">
                        <td>Achternaam:</td><td><input type="text" name="achternaam" value='<?php echo $row['Achternaam'] ?>'/></td>
                    </tr>
                    <tr id="spaceUnder">
                        <td>Telefoonnummer:</td><td><input type="text" name="telefoon" value='<?php echo $row['telefoon'] ?>'/></td>
                    </tr>
                    <tr id="spaceUnder">
                        <td>E-mailadres:</td><td><input type="text" name="email" value='<?php echo $row['email'] ?>'/></td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo" <input type='hidden' value='".$_POST['pers_nummer']."'  name='pers_nummerN'>"?>
                            <input type="submit" value="Bijwerken"/>
                        </td>
                    </tr>
                </table>
            </form>
        <?php
        }
    }
}

elseif(isset($_POST['voornaam'])){
    $sqli = "UPDATE surveillanten
                SET Voornaam = ?,
                    Tussenvoegsel = ?,
                    Achternaam = ?,
                    telefoon= ?,
                    email = ?
                WHERE pers_nummer = ?";
    $stmt = $conn->prepare($sqli);
    $voornaam = $_POST['voornaam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $telefoonnummer = $_POST['telefoon'];
    $mail = $_POST['email'];
    $nummer = $_POST['pers_nummerN'];
    $stmt->bind_param("sssssd", $voornaam, $tussenvoegsel, $achternaam, $telefoonnummer, $mail,$nummer);
    $stmt->execute();
    echo"<h3>Succesvol bewerkt</h3>";

}
else {
?>
<h1 style="text-align: center;">
    Kies een surveillant om te bewerken
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
                echo "<option value = " . $row['pers_nummer'] . ">" . $row['Tussenvoegsel'] . " " . $row['Achternaam'] . ", " . $row['Voornaam'] . "  </option>";
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