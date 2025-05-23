<?php

function parOuImpar($a, $b){
    if($a%$b==0){
        echo "$a e $b é Divisiel";
    } else echo "$a e $b não é divisel\n";
}

echo "Digite um numero: \n";
$numero1=(int)trim(fgets(STDIN));
echo "Digite um numero: \n";
$numero2=(int)trim(fgets(STDIN));
return parOuImpar($numero1, $numero2);
?>
