<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N. D. 7 WEB mechanika </title>
</head>

<?php
/*
1.Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. 
Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų  
perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant 
nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos 
be perduodamo kintamojo, vėl pasidarytų juodas.

*/
echo '<style>html{background:black;}</style>';
if(isset($_GET['color'])){
    if($_GET['color']==1){echo '<style>html{background:red;}</style>';

    }
}
?>
<a href='?'>Nuoroda i save</a><br>
<a href='?color=1'>Nuoroda su GET</a><br>


<!-- marek@jankovskij.lt -->
