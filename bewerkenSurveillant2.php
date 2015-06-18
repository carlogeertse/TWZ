<?php inclue('connectDB.php'); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $sqlEdit = "UPDATE surveillanten
                SET Voornaam = '" . $_POST['voornaam'] . "',
                    Tussenvoegsel = '" . $_POST['tussenvoegsel'] . "',
                    Achternaam = '" . $_POST['achternaam'] . "',
                    telefoonnummer = '" . $_POST['telefoon'] . "',
                    email = '" . $_POST['email'] . "'
                WHERE pers_nummer = '".$_POST['pers_nummer']."'";
    $conn -> query ($sqlEdit);
    echo $sqlEdit;
}
?>
<html>
    <head>
        <title>

        </title>
    </head>

    <body style = "background-image: url(src/download.jpg); position: relative; background-size: cover;">
    <?php
    include ('menu.php');
    if ($sqlEdit == true) {
        echo "De surveillant is succesvol opgeslagen";
    }
    ?>
        <a href = "survBewerken.php">
            <button type = "button">
                Bewerk een ander lid
            </button>
        </a>
        of
        <a href = "index.php">
            <button type = "button">
                Ga naar de homepage
            </button>
        </a>
    </body>
</html>