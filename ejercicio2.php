<table border = 1>
<?php 


$sub = [[2,2],[2,1]];



for ($i=0;$i<=12;$i++){
    echo "<tr>";
    for ($j=0;$j<=12;$j++){
        $cantidad = count($sub);
        for ($l=0; $l<$cantidad;$l++){
            $cantidadArray = count($sub[$l]);
            if ($sub[$l][0] == $i && $sub[$l][1] == $j){
                echo "<td>X</td>";
                $imprimir = 1;
            }
        }
    
    if ($imprimir){

    }
    elseif ($i == 0 && $j >0){
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
    $imprimir = 0;

    }

}
?>
</table>