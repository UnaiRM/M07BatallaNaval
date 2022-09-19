<table border = 1>
<?php 

$fragatas = [];

for ($i=0; $i<4;$i++){
    $x = rand(1,12);
    $y = rand(1,12);
    $fragata = [$x,$y];
    $arrayDeArrays[] = $fragata;
    }


$submarinos = [];

for ($i=0; $i<3;$i++){
    $submarino = [];
    $posicion = rand(1,2);
    if ($posicion == 1){
        $x = rand(1,12);
        $y = rand(1,12);
        for ($k=0;$k<2;$k++){
            $submarino = [[$x,$y],[$x,$y+1]];
        }
    }else{
        $x = rand(1,12);
        $y = rand(1,12);
        for ($k=0;$k<2;$k++){
            $submarino = [[$x,$y],[$x+1,$y]];
        }
    }
    $arrayDeArrays[] = $submarino;
}


$destructores = [];

for ($i=0; $i<2;$i++){
    $destructor = [];
    $posicion = rand(1,2);
    if ($posicion == 1){
        $x = rand(1,12);
        $y = rand(1,12);
        for ($k=0;$k<2;$k++){
            $destructor = [[$x,$y],[$x,$y+1],[$x,$y+2]];
        }
    }else{
        $x = rand(1,12);
        $y = rand(1,12);
        for ($k=0;$k<2;$k++){
            $destructor = [[$x,$y],[$x+1,$y],[$x+2,$y]];
        }
    }
    $arrayDeArrays[] = $destructor;
}


$acorazados = [];

for ($i=0; $i<1;$i++){
    $acorazado = [];
    $posicion = rand(1,2);
    if ($posicion == 1){
        $x = rand(1,12);
        $y = rand(1,12);
        for ($k=0;$k<2;$k++){
            $acorazado = [[$x,$y],[$x,$y+1],[$x,$y+2],[$x,$y+3]];
        }
    }else{
        $x = rand(1,12);
        $y = rand(1,12);
        for ($k=0;$k<2;$k++){
            $acorazado = [[$x,$y],[$x+1,$y],[$x+2,$y],[$x+3,$y]];
        }
    }
    $arrayDeArrays[] = $acorazado;
}

echo "<pre>";
var_dump($arrayDeArrays);
echo "</pre>";

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
