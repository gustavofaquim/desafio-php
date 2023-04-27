<?php

function frequencySort($arr) {
    // Passo 1: Conta as ocorrências de cada número
    $count = array_count_values($arr);
    
    // Passo 2: Ordena os valores com base na quantidade de ocorrências e, em seguida, no valor do número
    uasort($count, function($a, $b) use ($arr) {
        if ($a == $b) {
            $indexes_a = array_keys($arr, key($count));
            $indexes_b = array_keys($arr, key($count));
            $min_a = min($indexes_a);
            $min_b = min($indexes_b);
            if ($arr[$min_a] == $arr[$min_b]) {
                return $min_a - $min_b;
            }
            return $arr[$min_a] - $arr[$min_b];
        }
        return $a - $b;
    });
    
    // Passo 3: Cria um novo array com os números ordenados com base nas ocorrências e no valor do número
    $resultado = array();
    foreach ($count as $num => $freq) {
        $resultado = array_merge($resultado, array_fill(0, $freq, $num));
    }
    
    return $resultado;
}


$arr = array(3, 1, 2, 2, 4);
$result = frequencySort($arr);
print_r($result);