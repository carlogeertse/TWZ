<?php $surveillantensql = "SELECT Voornaam, Tussenvoegsel, Achternaam, pers_nummer
FROM   surveillanten;";

$surveillantenresult = $conn->query($surveillantensql);

$survresultarray = [];

while($survrow = $surveillantenresult->fetch_assoc())
{
array_push($survresultarray,$survrow);
}?>