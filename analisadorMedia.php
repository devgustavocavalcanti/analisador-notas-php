<?php
function calculoMedia($nota, $qtdnota){
 $soma=0; 
     foreach($nota as $notas){
        $soma+=$notas;
     }
    return $soma/$qtdnota;
}
function mediaTurma($medias, $qtdAlunos){
    $somaMedia = 0;
    foreach($medias as $media){
        $somaMedia+=$media;
    }
return $somaMedia/$qtdAlunos;
}
function acimaMedia($aluno, $mediaTurma){
   $acima=[];
   
foreach($aluno as $nome => $media){
    if($media >= $mediaTurma){
        $acima[] = $nome;
    } 
} 
return $acima;
}
function abaixoMedia($aluno, $mediaTurma){
    $abaixo=[];
foreach($aluno as $nome => $media){
    if($media <= $mediaTurma){
        $abaixo[] = $nome;
     }
    }
    return $abaixo;
}
$aluno=[];
echo "Quantidade de aluno: \n";
$qtdAluno = (int)trim(fgets(STDIN));
echo "Quantidade de notas a ser calculada: \n";
$qtdNotas = (int)trim(fgets(STDIN));

for($i=1; $i<=$qtdAluno; $i++){
echo "Digite o nome do Aluno $i\n";
$nome=trim(fgets(STDIN));

 for($j=1; $j<=$qtdNotas; $j++){
    echo "Digite o a nota $j do $nome\n";
    $nota[$j] = (int)trim(fgets(STDIN));
  }
  $media = calculoMedia($nota, $qtdNotas);
  $aluno[$nome] =  $media;
}
$mediaTurma=mediaTurma($aluno, $qtdAluno);
$classificaoAcima=acimaMedia($aluno, $mediaTurma);
$classificaoAbaixo=abaixoMedia($aluno, $mediaTurma);

foreach($aluno as $nome => $media){
    printf("Média de %s é %.2f\n", $nome, $media);
}


printf("//// MÉDIAS ////\n");
foreach($aluno as $nome => $media){
    printf("Média de %s é %.2f\n", $nome, $media);
}
echo"MÉDIA DA TURMA: $mediaTurma\n";
echo"//// ALUNOS COM A MÉDIA ACIMA ////\n";
foreach($classificaoAcima as $nome){
 echo "$nome\n";
}
echo"//// ALUNOS COM A MÉDIA ABAIXO ////\n";
foreach($classificaoAbaixo as $nome){
 echo "$nome\n";
}




