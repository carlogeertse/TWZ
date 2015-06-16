<!DOCTYPE html>
<?php include ("connectDB.php"); ?>
<html>
<head>
    <title>
        Beschikbaarheid
    </title>
    <link rel = "stylesheet" type = "text/css" href = "Style.css">
</head>

<body>
<?php include("Menu.php"); ?>

<h1>
    <b>
        Invoeren Beschikbaarheid
    </b>
</h1>

<h3> Kies een week </h3>

<form action="beschikInvoerenPost.php" method="POST">
    Selecteer een week:
    <input type="week" name="week">
    <!--
    <select name = "week">
        <?php for($i=1; $i<=53; $i++)
        {
            echo "<option>".$i."</option>";
        }
        ?>
    </select>
    <br>
    Selecteer een jaar:
    <select name = "jaar">
        <?php for($i=2000; $i<=2500; $i++)
        {
            echo "<option>".$i."</option>";
        }
        ?>
    </select>
    -->
    <input type="submit">
</form>

</body>
</html>