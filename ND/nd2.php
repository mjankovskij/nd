<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N. D. 2</title>
    <link rel="stylesheet" href="./style.css">
</head>

<?php
/*
1. Sukurti du kintamuosius.
Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis).
Atspausdinti trumpesnį stringą.
*/
echo '<h3>1............................................................................................</h3><br>';
$firstname = 'Arnoldas';
$lastname = 'Švarcenegeris';
echo "$firstname $lastname<br>";
echo mb_strlen($firstname) < mb_strlen($lastname) ? $firstname : $lastname;

///////// 2 BUDAS /////////
$array = ['Arnoldas', 'Švarcenegeris'];
foreach ($array as $item) {
    if (isset($result)) {
        if (mb_strlen($item) < mb_strlen($result)) $result = $item;
    } else {
        $result = $item;
    }
}
echo "<br><br>2 budas (trumpiausias zodis masyve (gali but bet kiek irasu)): $result";

/*
2. Sukurti du kintamuosius.
Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus.
Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.
*/
echo '<br><br><h3>2............................................................................................</h3><br>';
$firstname = 'Arnoldas';
$lastname = 'Švarcenegeris';
echo "$firstname $lastname<br>";
echo mb_strtoupper($firstname) . ' ' . mb_strtolower($lastname);


/*
3. Sukurti du kintamuosius.
Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus.
Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
*/
echo '<br><br><h3>3............................................................................................</h3><br>';
$firstname = 'Arnoldas';
$lastname = 'Švarcenegeris';
echo "$firstname $lastname<br>";
$initials = mb_substr($firstname, 0, 1) . mb_substr($lastname, 0, 1);
echo $initials;
// echo $firstname[0] . $lastname[0]; <--- su lt raidem neveiks.


/*
4. Sukurti du kintamuosius.
Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus.
Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių.
Jį atspausdinti.
*/
echo '<br><br><h3>4............................................................................................</h3><br>';
$firstname = 'Arnoldas';
$lastname = 'Švarcenegeris';
echo "$firstname $lastname<br>";
$lastChars = mb_substr($firstname, -3) . mb_substr($lastname, -3);
echo $lastChars;


/*
5. Sukurti kintamąjį su stringu: “An American in Paris”.
Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”. 
Rezultatą atspausdinti.
*/
echo '<br><br><h3>5............................................................................................</h3><br>';
$str = 'An American in Paris';
echo "$str <br>";
echo preg_replace('/[Aa]/', '*', $str);

///////// 2 budas /////////
for($i=0;$i<mb_strlen($str);$i++){
if($str[$i]=='a' OR $str[$i]=='A'){$str[$i]='*';}
}
echo '<br><br> 2 budas (su for, neveiks su lt raidem):'.$str; // su lt raidem neveiks


/*
6. Sukurti kintamąjį su stringu: “An American in Paris”.
Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides.
Rezultatą atspausdinti.
*/
echo '<br><br><h3>6............................................................................................</h3><br>';
$str = 'An American in Paris';
echo "$str <br>";
echo "Viso A ir a raidžių: " . preg_match_all('/[Aa]/u', $str);
echo "<br>2 budas: " . substr_count(mb_strtolower($str), 'a');


/*
7. Sukurti kintamąjį su stringu: “An American in Paris”.
Jame ištrinti visas balses.
Rezultatą atspausdinti.
Kodą pakartoti su stringais: 
    “Breakfast at Tiffany's”,
    “2001: A Space Odyssey” ir 
    “It's a Wonderful Life”.
*/
echo '<br><br><h3>7............................................................................................</h3><br>';
$str1 =  'An American in Paris';
$str2 = 'Breakfast at Tiffany\'s';
$str3 = '2001: A Space Odyssey';
$str4 = 'It\'s a Wonderful Life';
$pattern = '/[AaĄąEeĘęĖėIiĮįYyOoUuŲųŪū]/';

echo $str1 . ' - ' . preg_replace($pattern, '', $str1) . '<br>';
echo $str2 . ' - ' . preg_replace($pattern, '', $str2) . '<br>';
echo $str3 . ' - ' . preg_replace($pattern, '', $str3) . '<br>';
echo $str4 . ' - ' . preg_replace($pattern, '', $str4);

///////// 2 budas /////////
echo '<br><br>2 budas:<br>';
$str = ['An American in Paris', 'Breakfast at Tiffany\'s', '2001: A Space Odyssey', 'It\'s a Wonderful Life'];
foreach ($str as $item) {
    echo $item . ' - ' . preg_replace('/[AaĄąEeĘęĖėIiĮįYyOoUuŲųŪū]/', '', $item) . '<br>';
}


/*
8. Stringe, kurį generuoja toks kodas: 
    'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
Surasti ir atspausdinti epizodo numerį.
*/
echo '<br><h3>8............................................................................................</h3><br>';
$str = 'Star Wars: Episode ' . str_repeat(' ', rand(0, 5)) . rand(1, 9) . ' - A New Hope';
echo $str . '<br>';
echo 'Episodas: ' . preg_replace('/[^0-9]/', '', $str);

///////// 2 budas /////////
echo "<br><br>2 budas(jei preg_replace neegzistuotu): ";
for ($i = 0; $i < mb_strlen($str); $i++) {
    is_numeric($str[$i]) && print $str[$i];
}

///////// 3 budas /////////
echo '<br><br>3 budas(kai ieskoma skaiciaus po Episode): ';
// $str = 'Star Wars: Episode ' . rand(1, 5) . rand(1, 9) . ' - A New Hope';
$str = preg_replace('/\s+/', ' ', $str);
$str = explode(' ', $str);
for ($i = 0; $i < count($str); $i++) {
    $str[$i] == 'Episode' && print $str[$i + 1];
}


/*
9. Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood”
yra žodžių trumpesnių arba lygių nei 5 raidės.
Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.
*/
echo '<br><br><h3>9............................................................................................</h3><br>';
$str1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$str2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";

echo "$str1 <br>";
echo 'Žodžių kurie <=5 skaičius: ' . str_word_count(preg_replace('~\b\S{6,}\b~', '', $str1));
echo "<br><br> $str2 <br>";
echo 'Žodžių kurie <=5 skaičius: ' . str_word_count(preg_replace('~\b\S{6,}\b~', '', $str2));

///////// 2 budas /////////
echo '<br><br>2 budas (su masyvu, be ereg):<br>';
$str = ['Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood', 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale'];
foreach ($str as $item) {
    $wordsCount=0;
    echo $item . ' (';
   foreach(explode(' ', $item) as $item){
    mb_strlen($item)<=5 && $wordsCount++;
   }
    echo $wordsCount . ')<br>';
}


/*
10. Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių.
Stringo ilgis 3 simboliai.
*/
echo '<br><br><h3>10............................................................................................</h3><br>';
echo 'Random 3 lotyniškų raidžių string: ';
echo substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 3);

///////// 2 budas /////////
echo '<br><br> 2 budas: ';
for($i=0;$i<3;$i++){echo chr(rand(97,122));}


/*
11. Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių, 
o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų.
Žodžiai neturi kartotis. (reikės masyvo)
*/
echo '<br><br><h3>11............................................................................................</h3><br>';
$str = explode(' ', $str1 . ' ' . $str2);

$array = [];
while (count($array) < 10) {

    $randomWord = $str[rand(0, count($str) - 1)];
    if (!in_array($randomWord, $array)) array_push($array, preg_replace('[,]', '', $randomWord));
    // arba galima taip kaip zemiau:
    // array_push($array, preg_replace('[,]', '', $str[rand(0, count($str) - 1)]));
    // $array = array_unique($array);
    
}

echo '<pre>';
print_r($array);
echo '</pre>';

///////// 2 budas /////////

$array = explode(' ', $str1 . ' ' . $str2);
shuffle($array);
$array=implode(' ', array_slice(preg_replace('[,]', '', $array), 0, 10));
echo '<br>2 budas ir kitoks atvaizdavimas: ' . $array;

// marek@jankovskij.lt