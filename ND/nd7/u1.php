<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N. D. 7 WEB mechanika </title>
    <?php
    if (isset($_GET['color']) && $_GET['color'] == 1) {
        echo '<style>body{background:red;}</style>';
    } else {
        echo '<style>body{background:black;}</style>';
    }
    ?>
</head>

<!-- 1.Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. 
Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų  
perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant 
nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos 
be perduodamo kintamojo, vėl pasidarytų juodas. -->

<a href='?'>Nuoroda i save</a><br>
<a href='?color=1'>Nuoroda su GET</a><br>


<!-- marek@jankovskij.lt -->