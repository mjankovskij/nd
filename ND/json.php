<!-- PHP TO JS (JSON) -->
<?php
$array = ['user'=>'blabla','email'=>'vard@pavard.lt','age'=>50];
$json = json_encode($array);
print_r($json);
?>
<script>
const json = <?php echo $json;?>;
console.log(json);
</script>


<?php echo "<pre>";
    
    $arr101 = $firstPart = [];
    $rand = 0;

    // generating array
    while(count($arr101) < 101){
        $rand = rand(0, 300);
        (in_array($rand, $arr101) == true) ?: $arr101[] = $rand;
    }
    sort($arr101);
    // variable for testing purposes only
    $maxTest = max($arr101);
    // key of the max value 
    $max = array_keys($arr101, max($arr101)); 
    unset($arr101[$max[0]]);
    echo "Max value: $maxTest, Key: $max[0] <br>";
    

    foreach ($arr101 as $key => $value) {
        if ($key % 2) $firstPart[] = $value;
        else $secondPart[] = $value;
    }
    
    $sumFirst = array_sum($firstPart);
    $sumSecond = array_sum($secondPart);
    $absDiff = abs($sumFirst - $sumSecond);

    for ($i=0; $i < 50; $i++) { 
        if($absDiff < 30) break;
        $tmp = $firstPart[$i];
        $firstPart[$i] = $secondPart[$i];
        $secondPart[$i] = $tmp;
        }
        
    sort($firstPart);
    rsort($secondPart);

    $finalArr101 = array_merge($firstPart, [$maxTest], $secondPart);
    print_r($finalArr101);

    echo "1st part sum: $sumFirst <br>";
    echo "2nd part sum: $sumSecond <br>";
    echo "Absolute difference: $absDiff";