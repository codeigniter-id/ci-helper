<?php

/**
 * Digunakan untuk memvalidasi ISO number dari container 
 * 
 * Example : `var_dump(container_number('TCNU2339426'));`
 * @param string $containerNumber
 * @return bool
 */
function container_number(string $containerNumber)
{
    $charMap = ['A' => 10, 'B' => 12, 'C' => 13, 'D' => 14, 'E' => 15, 'F' => 16, 'G' => 17, 'H' => 18, 'I' => 19, 'J' => 20, 'K' => 21, 'L' => 23, 'M' => 24, 'N' => 25, 'O' => 26, 'P' => 27, 'Q' => 28, 'R' => 29, 'S' => 30, 'T' => 31, 'U' => 32, 'V' => 34, 'W' => 35, 'X' => 36, 'Y' => 37, 'Z' => 38];
    $containerNumber = str_replace(" ", "", strtoupper($containerNumber));
    if ($containerNumber == null || empty($containerNumber) || strlen($containerNumber) < 11) {
        return false;
    }

    $acc = 0;
    $num = str_split($containerNumber);
    for ($i = 0; $i < 10; $i++) {
        if ($i < 4) {
            $p = isset($num[$i]) ? $num[$i] : 0;
            $c = isset($charMap[$p]) ? $charMap[$p] : 0;
            if (is_numeric($c)) {
                $acc += ($c * pow(2, $i));
            }
        } else {
            $p = isset($num[$i]) ? $num[$i] : 0;
            if (is_numeric($p)) {
                $acc += $p * pow(2, $i);
            }
        }
    }

    $rem = $acc % 11;
    if ($rem == 10) {
        $rem = 0;
    }

    if (strlen($containerNumber) == 11 && $num[10] == $rem) {
        return true;
    }

    return false;
}
