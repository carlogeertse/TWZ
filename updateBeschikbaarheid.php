<?php
    //Connect met de database
    include("connectDB.php");

    //Ophalen Post variabelen
    $isChecked = $_POST['isChecked'];
    if($isChecked == 'true'){
        $isChecked = 1;
    } else {
        $isChecked = 0;
    }

    $idarray = explode("-",$_POST['id']);
    $dagdeel = $idarray[0];
    $surveillant = $idarray[1];
    $date = $_POST['date'];

    if($dagdeel == 'ochtend') {
        $sql = "INSERT INTO beschikbaarheid (pers_nummer, datum, ochtend)
                VALUES('".$surveillant."','".$date."','".$isChecked."')
                ON DUPLICATE KEY UPDATE ochtend='".$isChecked."'";
        $conn->query($sql);
        echo 'success';
    }
    else if($dagdeel == 'middag'){
        $sql = "INSERT INTO beschikbaarheid (pers_nummer,datum,middag)
                VALUES('".$surveillant."','".$date."','".$isChecked."')
                ON DUPLICATE KEY UPDATE middag='".$isChecked."'";
        $conn->query($sql);
        echo 'success';
    }
    else if($dagdeel == 'avond'){
        $sql = "INSERT INTO beschikbaarheid (pers_nummer,datum,avond)
                VALUES('".$surveillant."','".$date."','".$isChecked."')
                ON DUPLICATE KEY UPDATE avond='".$isChecked."'";
        $conn->query($sql);
        echo 'success';
    }
    else{
        echo 'fail';
    }
?>