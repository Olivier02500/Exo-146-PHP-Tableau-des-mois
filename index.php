<?php
//exercice1
$month = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'];

//exercice2
echo $month[2];
echo "<br>";
echo "<br>";

//exercice3
echo $month[5];
echo "<br>";
echo "<br>";

//exercice4
$month[7] = "août";

print_r($month);

//exercice5
$departements = [02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas-de-Calais', 80 => 'Somme'];
echo "<br>";
echo "<br>";

//exercice6
print_r($departements[59]);
echo "<br>";
echo "<br>";

//exercice7
$departements2 = array_pad($departements,6,'Reims');
print_r($departements2);
echo "<br>";
echo "<br>";

//exercice8
foreach($month as $value){
    echo $value . "<br>";
}
echo "<br>";
echo "<br>";

//exercice9
foreach ($departements as $value){
    echo $value . "<br>";
}
echo "<br>";
echo "<br>";

//exercice10
foreach ($departements as $key => $value){
    echo "Le département de " . $value . " a le numéro " . $key . "<br>";
}

?>
