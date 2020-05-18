<?php
$noms = ["François", "Michel", "Nicole", "Véronique", "Benoît"];
$newn = 'Leeloo';    

$noms[5] = $newn;

foreach ($noms as $nom) {
    print_r($noms);
}
?>