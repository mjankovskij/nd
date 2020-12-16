<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N. D. 7 WEB mechanika </title>
</head>

<!-- 5.Sukurkite du atskirus puslapius blue.php ir red.php 
Juose sukurkite linkus į pačius save (abu į save ne į kitą puslapį!). 
Padarykite taip, kad paspaudus ant  linko puslapis ne tiesiog persikrautų, 
o PHP kodas (ne tiesiogiai html tagas!) 
naršyklę peradresuotų į kitą puslapį (iš raudono į mėlyną ir atvirkščiai). -->
<style>html{background:#070744;}</style>
<?php

if (isset($_GET['p'])) {
    header('Location: ./red.php'); 
}
echo'<a href=\'?p\'>Nuoroda i save</a><br>';



// marek@jankovskij.lt