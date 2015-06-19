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

<h1>
    <b>
        Invoeren Academie
    </b>
</h1>

<table>
    <form method="post" action="academieToevoegen.php">
        <tr id="spaceUnder">
            <td>
                Academie:
            </td>
            <td>
                <input type="text" name="Academie" required>
            </td>
        </tr>
        <input type="submit" value="toevoegen">
    </form>
</table>

</body>
</html>