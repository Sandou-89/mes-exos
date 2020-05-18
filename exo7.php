 <!-- table de multiplication -->
 <!-- ma premiére boucle -->
<?php
echo "<table>";
for($i = 1;$i <= 10; $i++ )
{
 echo ('<tr>');
//  ma  2éme boucle
for($j = 1;$j <= 10;$j++ )
    {
        echo ('<td>'. $i*$j .'</td>');
    }
    echo ('</tr><br>');
}
echo "</table>"
?>

