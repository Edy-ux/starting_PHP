<?php 

// Array chave valor -  0 1 2 3 4 5

$array = [ 
    'Luiz' =>40,
    200,
    100,
    3000 => 150,
    "school of Net",
    5 =>true
 ]; 

echo $array['Luiz'];
echo "\n"; 
echo $array[3000];
echo "\n"; 
echo $array[0];
echo "\n"; 

// mostrar todos valores do array
echo var_dump($array);
echo $array[3001];

/* A chave é delimitado apartir  do primeiro elemento 
que não foi setado a chave no caso acima, a chave 0 tem valor 200 */

