<?php
// Primas N.D.
echo '1...............................<br>';
$firstname = 'Marek';
$lastname = 'Jankovskij';
$birthYears = '1996';
$thisYears = date("Y");
echo "<b>\"Aš esu $firstname $lastname. Man " . ($thisYears - $birthYears) . ' metai(ų)".</b>';

// Antras N.D.
echo '<br>2...............................<br>';
$num1 = rand(0, 4);
$num2 = rand(0, 4);

if ($num1 > $num2 && $num2 != 0) {
    echo "$num1 / $num2 = " . number_format(($num1 / $num2), 2);
    // round or number_format ???
} elseif ($num1 != 0) {
    echo "$num2 / $num1 = " . number_format(($num2 / $num1), 2);
} else {
    echo "$num2 / $num1, dalinti iš nulio negalima.";
}

// Trecias N.D.             ------------------
echo '<br><br>3...............................<br>';
$num1 = rand(0, 25);
$num2 = rand(0, 25);
$num3 = rand(0, 25);

echo "$num1, $num2, $num3, vidurinio kintamojo reikšmė: ";

if ($num1 == $num2) {
    echo $num1;
} elseif ($num2 == $num3) {
    echo $num2;
} elseif ((($num1 <=> $num2) + ($num3 <=> $num1))) {
    echo $num1;
} elseif ((($num2 <=> $num1) + ($num3 <=> $num2))) {
    echo $num2;
} elseif ((($num3 <=> $num1) + ($num2 <=> $num3))) {
    echo $num3;
}

// Ketvirtas N.D.
echo '<br><br>4...............................<br>';
$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);
echo "$a $b $c, sudaryti trikampį ";
if ($a + $b > $c && $b + $c > $a && $c + $a > $b) {
    echo 'galima.';
} else {
    echo 'negalima.';
}

// Penktas N.D.
echo '<br><br>5...............................<br>';
$num1 = rand(0, 2);
$num2 = rand(0, 2);
$num3 = rand(0, 2);
$num4 = rand(0, 2);

$count0 = $count1 = $count2 = 0;

${'count' . $num1}++;
${'count' . $num2}++;
${'count' . $num3}++;
${'count' . $num4}++;

echo "0 kartų: $count0<br> 1 kartų: $count1 <br> 2 kartų: $count2";

// Sestas N.D.
echo '<br><br>6...............................<br>';
$randNum = rand(1, 6);
echo "<h$randNum>$randNum</h$randNum>";

// Septintas N.D.
echo '7...............................<br>';

$num1 = rand(-10, 10);
$num2 = rand(-10, 10);
$num3 = rand(-10, 10);

if ($num1 < 0) {
    $color = 'green';
} elseif ($num1 > 0) {
    $color = 'blue';
} else {
    $color = 'red';
}
echo "<span style ='color:$color'>$num1 </span>";
if ($num2 < 0) {
    $color = 'green';
} elseif ($num2 > 0) {
    $color = 'blue';
} else {
    $color = 'red';
}
echo "<span style ='color:$color'>$num2 </span>";
if ($num3 < 0) {
    $color = 'green';
} elseif ($num3 > 0) {
    $color = 'blue';
} else {
    $color = 'red';
}
echo "<span style ='color:$color'>$num3</span>";


// Astuntas N.D.
echo '<br><br>8...............................<br>';
$candleNum = rand(5, 3000);
$candlePrice = 1;
$discount = 0;
if ($candlePrice * $candleNum > 2000) {
    $discount = 3;
}
if ($candlePrice * $candleNum > 3000) {
    $discount = 4;
}
echo "Žvakės $candleNum (vnt.) x $candlePrice Eur. - $discount % = " . number_format($candleNum * $candlePrice * (1 - $discount / 100), 2) . " Eur";

// Devintas N.D.
echo '<br><br>9...............................<br>';
$num1 = rand(0, 100);
$num2 = rand(0, 100);
$num3 = rand(0, 100);

echo "Skaičiai: $num1, $num2, $num3<br>";
$average = ($num1 + $num2 + $num3) / 3;
echo 'Vidurkis: ' . round($average) . '<br>';

$numCount = 3;
if ($num1 < 10 || $num1 > 90) {
    $num1 = 0;
    $numCount--;
}
if ($num2 < 10 || $num2 > 90) {
    $num2 = 0;
    $numCount--;
}
if ($num3 < 10 || $num3 > 90) {
    $num3 = 0;
    $numCount--;
}
echo 'Vidurkis (be < 10 ir > 90):';
if($numCount>0){
$average = ($num1 + $num2 + $num3) / $numCount;
 echo round($average);}else{
    echo '0';
}


// Desimtas N. D.
echo '<br><br>10...............................<br>';
// echo "Laikrodis: ".date("h:i:s")."<br>";
// $rand = rand(0,300);
// echo "Naujas laikrodis(+$rand): ".date("h:i:s", time() + $rand)."<br>";

$hours = sprintf('%02d', rand(0, 23));
$minutes = sprintf('%02d', rand(0, 59));
$seconds = sprintf('%02d', rand(0, 59));
echo "Laikrodis: $hours:$minutes:$seconds<br>";

$rand = rand(0, 300);
$minutes = $minutes + floor(($rand + $seconds) / 60);
if($minutes>59){$minutes-=60;$hours++;}
$seconds = $rand + $seconds - floor(($rand + $seconds) / 60) * 60;
$hours = sprintf('%02d', $hours);
$minutes = sprintf('%02d', $minutes);
$seconds = sprintf('%02d', $seconds);

echo "Naujas laikrodis(+$rand): $hours:$minutes:$seconds";

// Vienuoliktas N. D.
echo '<br><br>11...............................<br>';
$num1 = rand(1000, 9999);
$num2 = rand(1000, 9999);
$num3 = rand(1000, 9999);
$num4 = rand(1000, 9999);
$num5 = rand(1000, 9999);
$num6 = rand(1000, 9999);

echo "Skaičiai: $num1, $num2, $num3, $num4, $num5, $num6 <br>";

// $temporaryNum0 = $temporaryNum1 = $temporaryNum2 = $temporaryNum3 = $temporaryNum4 = $temporaryNum5 = 0;

${'temporaryNum' . (
    ($num1 > $num2 ? 1 : 0) +
    ($num1 > $num3 ? 1 : 0) +
    ($num1 > $num4 ? 1 : 0) +
    ($num1 > $num5 ? 1 : 0) +
    ($num1 > $num6 ? 1 : 0))} = $num1;
${'temporaryNum' . (
    ($num2 > $num1 ? 1 : 0) +
    ($num2 > $num3 ? 1 : 0) +
    ($num2 > $num4 ? 1 : 0) +
    ($num2 > $num5 ? 1 : 0) +
    ($num2 > $num6 ? 1 : 0) +
    ($num2 == $num1 ? 1 : 0))} = $num2;
${'temporaryNum' . (
    ($num3 > $num2 ? 1 : 0) +
    ($num3 > $num1 ? 1 : 0) +
    ($num3 > $num4 ? 1 : 0) +
    ($num3 > $num5 ? 1 : 0) +
    ($num3 > $num6 ? 1 : 0) +
    ($num3 == $num1 ? 1 : 0) +
    ($num3 == $num2 ? 1 : 0))} = $num3;
${'temporaryNum' . (
    ($num4 > $num2 ? 1 : 0) +
    ($num4 > $num3 ? 1 : 0) +
    ($num4 > $num1 ? 1 : 0) +
    ($num4 > $num5 ? 1 : 0) +
    ($num4 > $num6 ? 1 : 0) +
    ($num4 == $num1 ? 1 : 0) +
    ($num4 == $num2 ? 1 : 0) +
    ($num4 == $num3 ? 1 : 0))} = $num4;
${'temporaryNum' . (
    ($num5 > $num2 ? 1 : 0) +
    ($num5 > $num3 ? 1 : 0) +
    ($num5 > $num4 ? 1 : 0) +
    ($num5 > $num1 ? 1 : 0) +
    ($num5 > $num6 ? 1 : 0) +
    ($num5 == $num1 ? 1 : 0) +
    ($num5 == $num2 ? 1 : 0) +
    ($num5 == $num3 ? 1 : 0) +
    ($num5 == $num4 ? 1 : 0))} = $num5;
${'temporaryNum' . (
    ($num6 > $num2 ? 1 : 0) +
    ($num6 > $num3 ? 1 : 0) +
    ($num6 > $num4 ? 1 : 0) +
    ($num6 > $num5 ? 1 : 0) +
    ($num6 > $num1 ? 1 : 0) +
    ($num6 == $num1 ? 1 : 0) +
    ($num6 == $num2 ? 1 : 0) +
    ($num6 == $num3 ? 1 : 0) +
    ($num6 == $num4 ? 1 : 0) +
    ($num6 == $num5 ? 1 : 0))} = $num6;

// $result = "$temporaryNum0 $temporaryNum1 $temporaryNum2 $temporaryNum3 $temporaryNum4 $temporaryNum5"; // Nuo mažiausio
$result = "$temporaryNum5 $temporaryNum4 $temporaryNum3 $temporaryNum2 $temporaryNum1 $temporaryNum0"; // Nuo didžiausio
echo "Rezultatas: $result";


// gudravimas
echo "<br><br> 11.2. (Neleist generuot didesnio už prieš tai buvusį).<br>";
$num1 = rand(1000, 9999);
$num2 = rand(1000, $num1);
$num3 = rand(1000, $num2);
$num4 = rand(1000, $num3);
$num5 = rand(1000, $num4);
$num6 = rand(1000, $num5);
$result = "$num1 $num2 $num3 $num4 $num5 $num6";
echo $result;

// marek@jankovskij.lt