<?php
echo "<pre>";
$array = [];
foreach (range(0, 9) as $arr) {
    foreach (range(0, 4) as $value) {
        $array[$arr][] = rand(5, 25);
    }
}
echo "</pre>";
echo '<br>c) ';
$sum0 = [];
foreach ($array as $index => $arr) {
    foreach ($arr as $key => $value) {
        if(isset($sum0[$key])) {$sum0[$key]+= $value;}else{$sum0[$key]=$value;}
        // echo $value;
    }
}

print_r($sum0);
for ($i=0; $i < 5; $i++) echo "$i suma: ", array_sum(array_column($array, "$i")), "<br>";
echo "</pre>";