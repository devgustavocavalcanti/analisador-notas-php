<?php 
$valores=[];
$qtd_valores = 8;
$somaPares = 0; 
$indice = 1;
for($i=1; $i<=$qtd_valores; $i++){
    echo "Digite o valor $i:\n";
    fscanf(STDIN, "%d", $valores[$i]);    
}

foreach($valores as $indice => $valor){
    if ($valor%2==0){
        $somaPares+=$valor;
    }
}
echo "$somaPares\n";