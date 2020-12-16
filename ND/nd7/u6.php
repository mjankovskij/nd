<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N. D. 7 WEB mechanika </title>
</head>

<?php
/*
6. Padarykite puslapį su dviem mygtukais. 
Mygtukus įdėkite į dvi skairtingas formas- vieną GET ir kitą POST. 
Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, 
o tik tikrindami pačius masyvus, nuspalvinkite foną žaliai, 
kai paspaustas mygtukas iš GET formos ir geltonai- kai iš POST.
*/

if (isset($_GET['color'])) {
    echo '<style>html{background:#'.$_GET['color'].';}</style>';
}
if (!empty($_GET)){ echo '<style>html{background:green;}</style>';}
if (!empty($_POST)){ echo '<style>html{background:yellow;}</style>';}
?>
<a href='?'>Nuoroda i save</a><br>

<form action='?' method='GET'>
  <input type='submit'name='GET' value='GET'>
</form> 
<form action='?' method='POST'>
  <input type='submit'name='POST' value='POST'>
</form> 
<!-- marek@jankovskij.lt -->