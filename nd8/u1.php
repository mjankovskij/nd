<?php

if(isset($_POST['x']) && isset($_POST['y'])){
    $x = preg_replace('/[^0-9]/', '', $_POST['x']);
    $y = preg_replace('/[^0-9]/', '', $_POST['y']);

echo "<b>Atsiųstų skaičių ($x) ir ($y) suma lygi  ".($x+$y).'.</b>';
}else{

echo '<form method=\'post\'>
X:
<input type=\'text\' name=\'x\' value=\'\'>
<br>
Y:
<input type=\'text\' name=\'y\' value=\'\'>
<br>
<input type=\'submit\' value=\'Sumuoti\'>
</form>';
}