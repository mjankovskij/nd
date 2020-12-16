<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N. D. 6 funkcijos </title>
    <link rel="stylesheet" href="./style.css">
</head>

<?php

// 11.
//Sugeneruokite masyvą, kurio ilgis atsitiktinai kinta nuo 10 iki 100. 
//Masyvo reikšmes sudaro atsitiktiniai skaičiai 0-100 ir masyvai Santykis skaičiuojamas atsitiktinai, 
// bet taip, kad skaičiai sudarytų didesnę dalį nei masyvai. 
$array = [];
$rand = rand(10, 100);
$randPercent = rand(0, $rand / 2);
for ($i = 0; $i < $rand; $i++) {
    if ($randPercent < $i) {
        array_push($array, rand(0, 100));
    } else {
        pushArray($array[$i]);
    }
}

// Reikšmių masyvų gylis nuo 1 iki 5, o reikšmės analogiškos (nuo 50% iki 100% atsitiktiniai skaičiai 0-100, 
// o likusios masyvai) ir t.t. kol visos galutinės reikšmės bus skaičiai ne masyvai. 

function pushArray(&$array)
{
        $rand = rand(1, 5);
        $randPercent = rand(0, $rand / 2);
        
        for ($i = 0; $i <= $rand; $i++) {
            if ($randPercent > $i) {
                pushArray($array[$i]);
            } else {
                $array[$i] = rand(0, 100);
            }
        }
    }



/*
Masyvą pavazduokite kaip div elementą, kuris yra display:flex, kurio viduje yra skaičiai. 
Kiekvienas div elementas turi savo unikalų id ir unikalią background spalvą (spalva pvz nepavaizduota). 
pvz: <div id=”M1”>10, 46, 67, <div id=”M2”> 89, 45, 89, 34, 90, <div id=”M3”> 84, 97 </div> 90, 56 </div> </div>
*/

$elementsCount = 0;
$elementsSum = 0;
function printArrays($arr, $lvl)
{
    $result = '';
    foreach ($arr as $item) {
        if (gettype($item) == 'array') {
            $r = rand(0, 255);
            $g = rand(0, 255);
            $b = rand(0, 255);
            $result .= "<div class='flx' id='M$lvl' style='background:rgb($r,$g, $b);'>" . printArrays($item, $lvl + 1) . "</div>";
        } else {
            $result .= $item;
            // skaiciavimai
            global $elementsCount;
            $elementsCount++;
            global $elementsSum;
            $elementsSum+=$item;
        }
    }
    return $result;
}
echo "<div class='flx'>";
echo printArrays($array, 0);
echo '</div>';

// Suskaičiuoti kiek elementų turi masyvas. 
echo '<br><br>Suskaičiuoti kiek elementų turi masyvas: '.count($array);

// Suskaičiuoti masyvo elementų (tie kurie ne masyvai) sumą. 
echo "<br>Viso elementu(tie kurie ne masyvai): $elementsCount";
echo "<br>Ju suma: $elementsSum";

// Suskaičiuoti maksimalų masyvo gylį. 
function maxDepth(array $array) {
    $maxDepth = 1;
    foreach ($array as $value) {
        if (is_array($value)) {
            $depth = maxDepth($value) + 1;

            if ($depth > $maxDepth) {
                $maxDepth = $depth;
            }
        }
    }
    return $maxDepth;
}
echo '<br>Max gylis: '. maxDepth($array);
// Atvaizduokite masyvą grafiškai.
echo '<pre>';
print_r($array);
echo '</pre>';



// marek@jankovskij.lt
