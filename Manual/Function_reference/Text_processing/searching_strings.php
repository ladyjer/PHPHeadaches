<?php
/*
 * Confusione tra funzioni stringhe e array:
 *
 * per le stringhe viene prima la stringa e poi quello che devo cercare
 * per gli array viene sempre prima quello che devo cercare e poi l'array all'interno del quale farlo
 */

$array = [1,2,3,4];
$arrayb = ["ciao" => 'miao', 'saluta' => 'tutti', 'cippa' => 0];
$stringa = "Ciao";

// strpos — Find the position of the first occurrence of a substring in a string
// Returns FALSE if the needle was not found.
// offset non può essere negativo
echo strpos($stringa, 'ao');//2
echo strpos($stringa, 'ao', 2);//2
echo strpos($stringa, 'C', 1);//false
echo strpos($stringa, 'C', 0);//0
echo strpos($stringa, 'ao', 3);//false
echo strpos($stringa, 'ao', 2);//2
echo strpos($stringa, 'uo');//false

//array_search — Searches the array for a given value and returns the first corresponding key if successful/
echo array_search(1, $array);//0
echo array_search(2, $array);//1
echo array_search('tutti', $arrayb);//saluta
echo array_search('saluta', $arrayb);//false

// If the third parameter strict is set to TRUE then the array_search() function will
// search for identical elements in the haystack.
// This means it will also check the types of the needle in the haystack, and objects must be the same instance.
$arrayb = ["ciao" => '1miao', 'saluta' => 'tutti', 'cippa' => 0];
echo array_search(0, $arrayb);//saluta
echo array_search(1, $arrayb);//ciao
echo array_search(0, $arrayb, true);//cippa
echo array_search(1, $arrayb, true);//false