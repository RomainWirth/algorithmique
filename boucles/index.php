<?php

// EXERCICES SUR LES BOUCLES

//EXERCICE 1
//*
function getAge(): int {
    $age = (int)readline('Entrer votre âge ');
    while ($age <= 0) {
        $age = (int)readline('Erreur, votre âge doit être supérieur à 0, veuillez renseigner de nouveau votre âge : ');
    }
    return $age;
}
function findStageOfAge($number): void {
    if ($number > 0 && $number <= 2) {
        echo 'Vous êtes un bébé, votre âge est : ' . $number;
    }
    if ($number > 2 && $number <= 12) {
        echo 'Vous êtes un enfant, votre âge est : ' . $number;
    }
    if ($number > 12 && $number <= 17) {
        echo 'Vous êtes un ado, votre âge est : ' . $number;
    }
    if ($number > 17 && $number <= 69) {
        echo 'Vous êtes un adulte, votre âge est : ' . $number;
    }
    if ($number > 69) {
        echo 'Vous êtes un vieux, votre âge est : ' . $number;
    }
}
/*
echo findStageOfAge(getAge());
// */

//EXERCICE 2
//*
function wrongNumber($number): int {
    while ($number < 50 || $number > 100) {
        if ($number < 50) {
            $number = (int)readline('Ce nombre est trop petit, veuillez saisir un autre nombre : ');
        }
        if ($number > 100) {
            $number = (int)readline('Ce nombre est trop grand, veuillez saisir un autre nombre : ');
        }
    }
    return $number;
}
function getUserNumber(): int {
    $userNumber = (int)readline('Veuillez saisir un nombre entre 50 et 100 : ');
    return $userNumber;
}
/*
echo 'vous avez saisi ' . wrongNumber(getUserNumber());
//*/

//EXERCICE 3
//*
function getPositiveNumber(): int {
    $userNumber = (int)readline('Veuillez saisir un nombre positif : ');
    while ($userNumber <= 0) {
        $userNumber = (int)readline('Erreur, veuillez saisir un nombre positif : ');
    }
    return $userNumber;
}
//*/
/*
$userNumber = getPositiveNumber();
$userNumberTwo = getPositiveNumber();
//*/
function getModulo($dividende, $diviseur): int {
    while ($dividende >= $diviseur) {
        $dividende = $dividende - $diviseur;
    }
    return $dividende;
};
/*
$resultat = getModulo($userNumber, $userNumberTwo);
/*
echo 'le reste de la division '.$userNumber.'/'.$userNumberTwo.' est '.$resultat;
//*/

//EXERCICE 4
//*
function write(): String {
    return "Bonjour \n";
};
//*
function showFifty(): void {
    for ($i = 0; $i < 50; $i++) {
        echo write();
    }
};
/*
echo showFifty();
//*/

//EXERCICE 5
//*
function writeArray(): array {
    $array = [];
    for ($i = 0; $i < 10; $i++) {
        $array[$i] = (int)readline();
    }
    return $array;
};
/*
var_dump(writeArray());
//*/

//EXERCICE 6
//*
function sumArray(array $array): int {
    $sum = 0;
    for($i = 0; $i < count($array); $i++) {
        $sum = $sum + $array[$i];
    }
    return $sum;
};
/*
echo 'la somme des éléments du tableau est '.sumArray(writeArray());
//*/

/*
$myArray = [5, 3, -5, 7, 10, 5, 4, 6, 8, 1];
for ($i = 0; $i < count($myArray); $i++) {
    echo $myArray[$i].', ';
}
//*/

//EXERCICE 7
//*
function minimumValue($array): int {
    $min = $array[0];
    for($i = 0; $i < count($array); $i++) {
        if($min > $array[$i]) {
            $min = $array[$i];
        }
    }
    echo 'la valeur minimale du tableau est : ';
    return $min;
};
/*
echo 'la plus petite valeur du tableau est '.minimumValue($myArray);
//*/

//EXERCICE 8
//*
function transformArray($array): array {
    for($i = 0; $i < count($array); $i++) {
        if ($array[$i] < 0){
            $array[$i] = $array[$i] * (-1);
        }
//        echo $array[$i];
    }
    return $array;
};
//var_dump(transformArray($myArray));
//*/
//var_dump(minimumValue(transformArray($myArray)));

//EXERCICE 9
//*
function sumIntegers($number): int {
    $sum = 0;
    for($i = 0; $i <= $number; $i++) {
        $sum = $sum + $i;
    }
    return $sum;
}
/*
var_dump(sumIntegers(getPositiveNumber()));
//*/

//EXERCICE 10
//*
function reverseNumber($number): int {
    var_dump($number % 10);
    $reverse = 0;
    while ($number > 0) {
        $reverse = $reverse * 10 + $number % 10;
        var_dump($reverse);
        $number = ($number - $number % 10) / 10;
        var_dump($number);
    }
    echo 'le nombre '.$number.' à l\'envers est : ';
    return $reverse;
}
/*
var_dump(reverseNumber(getPositiveNumber()));
//*/

//EXERCICE 11
//*
$secretNumber = random_int(0, 1000);
//var_dump(($secretNumber));

function findSecretNumber($number) {
    $userNumber = 0;
    $tries = 20;
    while ($userNumber != $number && $tries != 0) {
        $userNumber = getPositiveNumber();
        $tries--;
        if ($userNumber > $number) {
            echo 'trop grand. Il reste '.$tries.' essais. ';
        } elseif ($userNumber < $number) {
            echo 'trop petit. Il reste '.$tries.' essais. ';
        } else {
            echo 'Gagné ! nombre d\'essais : '.(20-$tries);
        }
    }
}
/*
findSecretNumber($secretNumber);
//*/


// EXERCICES SUR LES STRUCTURES DE CONTROLE

//EXERCICE 1
function getNumber(): int {
    $userNumber = (int)readline('Veuillez saisir un entier: ');
    return $userNumber;
}

//*
function maxNumber($numberOne, $numberTwo, $numberThree) {
    if ($numberOne > $numberTwo && $numberOne > $numberThree) {
        echo 'le nombre le plus grand est : '.$numberOne;
    } elseif ($numberTwo > $numberOne && $numberTwo > $numberThree) {
        echo 'le nombre le plus grand est : '.$numberTwo;
    } elseif ($numberThree > $numberOne && $numberThree > $numberTwo) {
        echo 'le nombre le plus grand est : '.$numberThree;
    }
}
/*
maxNumber(getNumber(), getNumber(), getNumber());
//*/

//EXERCICE 2
//*
function estPair($number) {
    $modulo = $number%2;
    if($modulo == 0 ) {
        echo $number.' est un nombre pair';
    } else {
        echo $number.' est un nombre impair';
    }
}
/*
estPair(getNumber());
//*/

//EXERCICE 3
//*
function divided($number) {
    $moduloSeven = $number%7;
//    var_dump($moduloSeven);
    $moduloThirteen = $number%13;
//    var_dump($moduloThirteen);
    if($moduloSeven == 0 && $moduloThirteen == 0) {
        echo 'le nombre '.$number.' est divisible par 7 et par 13';
    } else {
        echo 'le nombre '.$number.' n\'est pas divisible par 7 et par 13';
    }
}
//*
divided(getNumber());
//*/

//EXERCICE 4
//*
function averageGrade(): int {
    $pupilGrade = (int)readline('Veuillez saisir une note comprise entre 0 et 20 : ');
    while ($pupilGrade < 0 || $pupilGrade > 20 ) {
        $pupilGrade = (int)readline('Erreur, veuillez saisir une note comprise entre 0 et 20 : ');
    }
    return $pupilGrade;
}
/*
averageGrade();
//*/

//*
function mention($grade) {
    if($grade < 10) {
        echo 'Vous n\'avez pas la moyenne, vous êtes recalé !';
    } elseif ($grade >= 10 && $grade < 12){
        echo 'Vous avez obtenu le bac sans mention';
    } elseif ($grade >= 12 && $grade < 14) {
        echo 'mention "Assez Bien" : moyenne supérieure ou égale à 12 et inférieure à 14';
    } elseif ($grade >= 14 && $grade < 16) {
        echo 'mention "Bien" : moyenne supérieure ou égale à 14 et inférieure à 16';
    } elseif ($grade >= 16) {
        echo 'mention "Très Bien" : moyenne supérieure ou égale à 16';
    }
};
/*
mention(averageGrade());
//*/

//EXERCICE 5
