<table border = 1>
<?php 


$sub = [[2,2],[2,1]];
$acor = [[3,4],[4,4],[5,4]];
$frag = [[5,6]];
$pav = [[1,6],[1,7],[1,8],[1,9]];
$arrayDeArrays = [$sub,$acor,$frag,$pav];


for ($i=0;$i<=12;$i++){
    echo "<tr>";
    for ($j=0;$j<=12;$j++){
        for ($k = 0; $k<count($arrayDeArrays); $k++){
            $cantidad = count($arrayDeArrays[$k]);
            for ($l=0; $l<$cantidad;$l++){
                
                $cantidadArray = count($arrayDeArrays[$l]);
                if ($arrayDeArrays[$k][$l][0] == $i && $arrayDeArrays[$k][$l][1] == $j){
                    echo "<td>X</td>";
                    $imprimir = 1;
                }
            
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
