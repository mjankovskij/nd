<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>N. D. 7 WEB mechanika </title>
</head>

<?php
/*
11. Suprogramuokite žaidimą. Žaidimas prasideda dviem laukeliais, kuriuose žaidėjai įveda savo vardus ir mygtuku “pradėti”. 
Šone yra rodomas žaidėjų rezultatas. 
Paspaudus “pradėti” turi atsirasti pirmo žaidėjo vardas ir mygtukas “mesti kauliuką”. 
Jį nuspaudus skriptas automatiškai sugeneruoja skaičių nuo 1 iki 6 ir jį prideda prie žaidėjo rezultato, 
o pirmo žaidėjo vardas pakeičiamas antro žaidėjo vardu (parodo kieno eilė “mesti kauliuką”). 
Žaidimas tęsiamas iki tol, kol kažkuris žaidėjas surenka 30 taškų. 
Tada parodomas pranešimas apie laimėjimą ir vėl leidžiama suvesti žaidėjų vardus ir pradėti žaidimą iš naujo.
*/


if (!isset($_GET['player1']) || isset($_GET['score1']) && $_GET['score1'] > 30 || isset($_GET['score2']) && $_GET['score2'] > 30) {
  echo '<form method=\'GET\'>
  <input type=\'text\' name=\'player1\' placeholder=\'1 zaidejo vardas\' pattern=\'[a-zA-Z]{3,20}\' required title=\'Varda turi sudaryti tik raides.\'>
<input type=\'text\' name=\'player2\' placeholder=\'2 zaidejo vardas\' pattern=\'[a-zA-Z]{3,20}\' required title=\'Varda turi sudaryti tik raides.\'>
<input type=\'hidden\' name=\'score1\' value=\'0\'>
<input type=\'hidden\' name=\'score2\' value=\'0\'>
<button name=\'throw\' value=\'0\'>Pradeti</button>
</form>';
  if (isset($_GET['score1']) && $_GET['score1'] > 30) {
    echo '<br>Paskutini zaidima laimejo: ' . preg_replace('/[^A-Za-z]/', '', $_GET['player1']);
  }
  if (isset($_GET['score2']) && $_GET['score2'] > 30) {
    echo '<br>Paskutini zaidima laimejo: ' . preg_replace('/[^A-Za-z]/', '', $_GET['player2']);
  }
} else {
  if ($_GET['throw'] < 1) {
    echo 'Pirmas zaidejas <b>' . preg_replace('/[^A-Za-z]/', '', $_GET['player1']) . '</b> turi tasku: ' . preg_replace('/[^0-9]/', '', $_GET['score1']) .
      '<br>Antras zaidejas <b>' . preg_replace('/[^A-Za-z]/', '', $_GET['player2']) . '</b> turi tasku: ' . preg_replace('/[^0-9]/', '', $_GET['score2']) .
      '<br><br> Pirmo zaidejo eile mesti.';
    // echo '<form action=' . $_SERVER['REQUEST_URI'] . ' method=\'POST\'>
    $score = $_GET['score1'] + rand(1, 6);
    echo '<form action=?player1=' . $_GET['player1'] . '&player2=' . $_GET['player2'] . '&score1=' . $score . '&score2=' . $_GET['score2'] . '&throw=1 method=\'POST\'>
<button>Mesti kauliuka</button>
</form>';
  } else {
    echo 'Pirmas zaidejas <b>' . preg_replace('/[^A-Za-z]/', '', $_GET['player1']) . '</b> turi tasku: ' . preg_replace('/[^0-9]/', '', $_GET['score1']) .
      '<br>Antras zaidejas <b>' . preg_replace('/[^A-Za-z]/', '', $_GET['player2']) . '</b> turi tasku: ' .  preg_replace('/[^0-9]/', '', $_GET['score2']) .
      '<br><br> Antro zaidejo eile mesti.';
    $score = $_GET['score2'] + rand(1, 6);
    echo '<form action=?player1=' . $_GET['player1'] . '&player2=' . $_GET['player2'] . '&score1=' . $_GET['score1'] . '&score2=' . $score . '&throw=0 method=\'POST\'>
<button>Mesti kauliuka</button>
</form>';
  }
}


// <!-- marek@jankovskij.lt -->