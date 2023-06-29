<?php

// --- 01
// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, 
// per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere. Esempio di array:

// $users = [
//      ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB']
// ];


// $users = [
//     [
//         'name' => 'Davide',
//         'surname' => 'Cariola',
//         'gender' => 'male',
//     ],

//     [
//         'name' => 'Laura',
//         'surname' => 'Rosii',
//         'gender' => 'female'
//     ],

//     [
//         'name' => 'Jhon',
//         'surname' => 'Connor',
//         'gender' => 'male'
//     ],

//     [
//         'name' => 'Katrine',
//         'surname' => 'Beverly',
//         'gender' => 'female'
//     ],
// ];


// // foreach for the array
// foreach ($users as $person) {
//     // if the person is male or female
//     if ($person['gender'] == "male") {
//         echo "Good morning Sig. $person[name] $person[surname] \n";
//     } else {
//         echo "Good morning Sig. $person[name] $person[surname] \n";
//     }
// }



// --- 02
// Dato un array di numeri a scelta, scrivere un programma 
// che calcoli la media solo dei numeri pari contenuti all’interno dell’array

// $numbers = [10, 55, 98, 33, 1, 75, 44, 88];

// $sum = 0;
// $count = 0;

// // cycle for the array
// foreach ($numbers as $number) {

//     // calculate even and odd numbers
//     if ($number % 2 == 0) {
//         $sum += $number;
//         $count++;
//     } 
// }

// if ($count > 0) {
    
//     $result = $sum / $number;
//     echo number_format((float)$result, 2, '.', '');

// }




// --- 03
// Scrivere un programma che stampi in console tutti i numeri 
// da uno a cento. Se il numero è multiplo di 3 stampare “PHP” 
// al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; 
// se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".

// $num = 0;

// for ($num = 1; $num <= 100; $num++) {

//     if ($num % 3 == 0) {
//         echo "PHP \n";
//     } else if ($num % 5 == 0) {
//         echo "JAVASCRIPT \n";
//     } else if ($num % 3 == 0 && $num % 5 == 0) {
//         echo "HACKADEMY \n";
//     } else {
//         echo "This is the number $num \n";
//     }

// }


// --- extra exercise 
// Scrivere un programma che converta un voto numerico (v) in un giudizio seguendo questi parametri:
// v < 18: insufficiente
// 18 <= v < 21: sufficiente
// 21 <= v < 24: buono
// 24 <= v < 27: distinto
// 27 <= v <= 29: ottimo
// v = 30: eccellente
// Esempio:
// Input: v = 29
// Output: Ottimo

// votation variable
$testResult = 24;

// I use switch case fore control all the condition
switch ($testResult) {

    case $testResult < 18 :
        echo "insufficient";
        break;
    
    case $testResult >= 18 && $testResult <= 21 :
        echo "sufficient";
        break;
    
    case $testResult >= 21 && $testResult <= 24 :
        echo "good";
        break;
    
    case $testResult >= 24 && $testResult <= 27 :
        echo "very good";
        break;
    
    case $testResult = 30 :
        echo "exellent";
        break;
    
    default:
        echo "try again";
        break;
}

?>