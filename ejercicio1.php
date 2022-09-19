<table border = 1>
<?php 

for ($i=0;$i<=12;$i++){
    echo "<tr>";
    for ($j=0;$j<=12;$j++){

    if ($i == 0 && $j >0){
        echo "<td>$j</td>\n";
    }
    elseif ($j == 0 && $i > 0){
        $numero = 64+$i;
        $letra = chr($numero);
        echo "<td>$letra</td>\n";
    }
    else{
        echo "<td></td>\n";
    }

    }
}
?>
</table>
