<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N. D. 7 WEB mechanika </title>
</head>

<?php
/*
2.Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, 
o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu 
(pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos.
*/
echo '<style>html{background:black;}</style>';
if (isset($_GET['color'])) {
    echo '<style>html{background:#'.$_GET['color'].';}</style>';
}
?>
<a href='?'>Nuoroda i save</a><br>
Pvz. http://localhost/Projects/BIT/nd/nd7/u2.php?color=1bbd1b


<!-- marek@jankovskij.lt -->