<?php 

function magicalSubsequence($s) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $pos = [-1, -1, -1, -1, -1]; // posição atual de cada vogal na subsequência mágica
    $maxLength = 0; // comprimento da subsequência mágica mais longa

    for ($i = 0; $i < strlen($s); $i++) {
        $char = $s[$i];
        $vowelIndex = array_search($char, $vowels);

        if ($vowelIndex !== false) {
            if ($vowelIndex === 0 || $pos[$vowelIndex - 1] >= 0) {
                // atualiza a posição atual da vogal na subsequência mágica
                $pos[$vowelIndex] = $i;

                // se a subsequência mágica atual for completa, calcula seu comprimento
                if ($vowelIndex === 4) {
                    $length = $pos[4] - $pos[0] + 1;
                    $maxLength = max($maxLength, $length);
                }
            }
        }
    }

    return $maxLength;
}



$s = "aeiaaioooaauuaeiou";
echo magicalSubsequence($s) . ' || '; // Saída esperada: 10

$s = "aeiaaioooaa";
echo magicalSubsequence($s). ' || '; // Saída esperada: 0

$s = "uioieeeaouiiuaeeuuiuuauuauaeaeuauaeaaiuoiouaeuiuuoooaeeaioeieoeooaeuooae";
echo magicalSubsequence($s). ' || '; // Saída esperada: 13

$s = "iaaieeeoaueuaaaaieaooiiuiaueeoauiueuaeiaouiueoouaeeioeieoeeiiiouiaioiaeeaaaeaouiioiueuoieeoeoiuuuouiaoea" .
     "aeeeiueuiueiaieuoueoeooiuoooiooouuuoiuoeiuaouoeaaaiaeueaiaeouuaeioeoaeeuuaeouiauaiaoioueeiauuieouoe" .
     "uoiiooauoeaoieuieiaooaaieuoauueoeueeauuaaueeeeeoooouueoiaauooioioaeiiuaiueeoaeiuiaouieiueuae";
echo magicalSubsequence($s). ' || '; // Saída esperada: 67
