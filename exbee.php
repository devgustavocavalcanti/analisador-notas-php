
<?php
$kmL=12;

fscanf(STDIN, "%f\n", $horasViagem);
fscanf(STDIN, "%f\n", $velociadeViagem);
$mediaCombustivel=($velociadeViagem*$horasViagem)/$kmL;
printf ("%.3f\n", $mediaCombustivel);