<?php
$json = '{
    "Title": "Créer des jeux de A à Z avec Unity",
    "Author": "Anthony Cardinale", 
    "Detail": { "Publisher": "D-Booker" } }' ;

$elements = json_decode($json, true);

function test_print($item,$key)
{
echo "$item\n";
}
array_walk_recursive($elements,"test_print");

?>