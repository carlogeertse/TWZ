<!DOCTYPE html>
<?php include("connectDB.php"); ?>
<html>
<head>
    <title>
        academie
    </title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body style="background-image: url(src/download.jpg); position: relative; background-size: cover;">
<?php include("Menu.php"); ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "INSERT INTO academie(naam)
                            VALUES(?)";

    $stmt = $conn->prepare($sql);
    $academie = $_POST['Academie'];
    $stmt->bind_param("s", $academie);
    $stmt->execute();
    echo "<h3>Academie toegevoegd!</h3>";
}

?>
<style>
    table {
        font-family: ("Arial Black", Gadget, sans-serif);
        font-size: 14px;
    }
</style>

<h1>
    <b>
        Academie toevoegen
    </b>
</h1>

<table>
    <form method="post" action="academieToevoegen.php">
        <tr id="spaceUnder">
            <td>
                Academie:
            </td>
            <td>
                <input style = "height: 25px;" type="text" name="Academie" required>
            </td>
            <td>
                <input type="submit" value="Academie toevoegen">
            </td>
        </tr>
    </form>
</table>

</body>
</html>