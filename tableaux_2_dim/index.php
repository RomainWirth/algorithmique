<?php
// Tableaux à 2 dimensions

// EXERCICE 1
//*
function arrayInit($length, $height): array {
    $array = [];
    for ($i = 0; $i < $height; $i++) {
        $array[$i] = array();
        for($j = 0; $j < $length; $j++) {
            $array[$i][$j] = 0;
        }
    }
    return $array;
}
/*
var_dump(arrayInit(3, 2));
//*/

// EXERCICE 2
//*
function arrayInitUser($length, $height): array {
    $array = [];
    for ($i = 0; $i < $height; $i++) {
        $array[$i] = array();
        for($j = 0; $j < $length; $j++) {
            $array[$i][$j] = (int)readline('veuillez entrer les chiffres du tableau : ');
        }
    }
    return $array;
}
/*
var_dump(arrayInitUser(3, 2));
//*/

// EXERCICE 3
//*
function identityArray($param) {
    $array = [];
    for ($i = 0; $i < $param; $i++) {
        $array[$i] = array();
        for($j = 0; $j < $param; $j++) {
            if(($i == 0 && $j == 0) || ($i == 1 && $j == 1) || ($i == 2 && $j == 2)) {
                $array[$i][$j] = 1;
            } else {
                $array[$i][$j] = 0;
            }
        }
    }
    return $array;
}
/*
var_dump(identityArray(3));
//*/

// EXERCICE 4
//*
function SumCell($array):int {
//    var_dump($array);
    $sum = 0;
    for ($i = 0; $i < count($array); $i++) {
        for($j = 0; $j < count($array[$i]); $j++) {
            $sum = $sum + $array[$i][$j];
        }
    }
    return $sum;
}
/*
echo 'la comme des cases du tableau est : '.sumCell(identityArray(3));
//*/

// EXERCICE 5
//*
function average($array) {
    $sum = SumCell($array);
    $nbCell = count($array) * count($array[0]);
//    echo 'sommes du tableau : '.$sum;
//    echo 'nombre lignes : '.$length.' et nombre de colonnes : '.$height;
    return $sum / $nbCell;
}
//*
echo 'la moyenne est : '.average(identityArray(3));
//*/

// EXERCICE 6
//*
function sumLine($array): array {
//    var_dump($array);
    $sum = [];
    for ($i = 0; $i < count($array); $i++) {
        $sum[$i] = 0;
        for($j = 0; $j < count($array[$i]); $j++) {
            $sum[$i] = $sum[$i] + $array[$i][$j];
        }
    }
    return $sum;
}
/*
echo sumLine([[1,2,3],[4,5,6],[7,8,9]]);
//*/