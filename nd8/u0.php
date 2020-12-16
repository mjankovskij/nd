<?php

if(isset($_POST['vardas']) && isset($_POST['elpastas'])){
    $vardas = preg_replace('/[^A-Za-z]/', '', $_POST['vardas']);
    $elpastas = preg_replace('/[^A-Za-z.@]/', '', $_POST['elpastas']);

echo "<p>Jūsų vardas: <b> $vardas </b></p>
<p>Jūsų el. paštas <b> $elpastas </b></p>";
}else{

echo '<form method=\'post\'>
Jūsų vardas
<input type=\'text\' name=\'vardas\' value=\'\'>
<br>
Jūsų el. pašto adresas:
<input type=\'text\' name=\'elpastas\' value=\'\'>
<input type=\'submit\' value=\'Išsiųsti\'>
</form>';
}