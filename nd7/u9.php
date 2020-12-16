<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>N. D. 7 WEB mechanika </title>
</head>

<?php
/*
9. Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10) checkbox su raidėm A,B,C… 
Padarykite taip, kad paspaudus mygtuką, fono spalva pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, 
rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek). 
*/

if (empty($_POST)) {
  echo '<style>html{background:black;color: #fff;}</style>
<form method=\'POST\'>';
  $rand = rand(3, 10);
  for ($i = 0; $i < $rand; $i++) {
    echo '<input type=\'checkbox\' name=' . chr(65 + $i) . ' value=' . $i . '>
  <label for=\'vehicle1\'>' . chr(65 + $i) . '</label><br>';
  }

  echo '<input type=\'submit\' value=\'Submit\'>
</form>';
} else {
  echo 'Pazymeta checkbox: ' . count($_POST);
}



// <!-- marek@jankovskij.lt -->