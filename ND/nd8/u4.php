<style>
    .square {
        padding: 10px;
        width: 250px;
        height: 380px;
        border: solid 1px #d6d5d5;
        border-radius: 3px;
    }

    .about {
        height: 85px;
        padding: 2px;
        border-bottom: solid 1px #d6d5d5;
        margin-bottom: 5px;
    }

    .about>.text {
        height: 60px;
        width: 164px;
        margin-top: 20px;
        float: left;
    }

    img {
        width: 80px;
        height: 80px;
    }

    /* HIDE RADIO */
    [type=checkbox] {
        position: absolute;
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* IMAGE STYLES */
    [type=checkbox]+img {
        cursor: pointer;
        opacity: 0.6;
        transition: 0.5s;
    }

    /* CHECKED STYLES */
    [type=checkbox]:checked+img {
        outline: 1px solid blue;
        opacity: 1;
    }

    button {
        float: right;
        background: rgb(98, 98, 231);
        color: #fff;
        border-radius: 3px;
        padding: 5px 10px;
        cursor: pointer;
    }
</style>

<?php


$data = [
    ['1484qeeqw', 'adasdsa5615', 'ewewr15156', 'ewrew4145', 'ioli45', 'ioli45ZZ', 'weewr84yt', 'werew6564', 'wqewqe1515', 'xvcvxc61514'], //dogs
    ['wrew51', 'we4er4', '984984ewryZ', 'asdasdew', 'qwweqe1515', 'qw84eqw9', 'wqew54', '945456ererre', 'fsdfds', 'dffsdd'], //cats
    ['dsasda', '94554weew', 'ewrrwe894984', 'asdeew54', 'erw984', 'eere45156', 'ewerwrew9854984', 'er4weerw', '98wer9rew', 'we59rew498'], //birds
];

$randomArray = array_rand($data);
$randomExample = $data[$randomArray][rand(0, 9)];
$randCorrectCount = rand(2, 5);

$imagesArray = [$randomExample];
while (count($imagesArray) < 10) {
    if (count($imagesArray) < $randCorrectCount) {
        $imagesArray[] = $data[$randomArray][rand(0, (count($data[$randomArray]) - 1))];
    } else {
        $imagesArray[] = $data[rand(0, (count($data)) - 1)][rand(0, (count($data[$randomArray]) - 1))];
    }
    $imagesArray = array_unique($imagesArray);
}

$imagesArray = array_diff($imagesArray, [$randomExample]);
shuffle($imagesArray);
// $imagesArray = shuffle($imagesArray);
// print_r($imagesArray);

    echo '<div class=\'square\'>';
    echo '<div class=\'about\'>
<div class=\'text\'>Select all images below that match this one:</div>
<img src="./img/captcha/' . $randomExample . '.jpg">
</div><form method=\'post\'>';
    foreach ($imagesArray as $key => $item) {
        echo '<label>
    <input type="hidden" value="' . $item . '" name="' . $key . '">
    <input type="checkbox" name="' . $key . '" value="_' . $item . '">
    <img src="./img/captcha/' . $item . '.jpg">
    </label>';
    }
    echo '<button  value="' . $randomArray . '" name="key">Verify</button>
 </form>';
    echo '</div>';
    if (!empty($_POST)) {
    $key = $_POST['key'];
    $POSTunique = [];
    foreach ($_POST as $item) $POSTunique[] = preg_replace('/[^0-9A-Za-z]/', '', $item);
    $POSTunique = array_unique($POSTunique);


    $mustBeSelectedCount = count($data[$key]) - count(array_diff($data[$key], $POSTunique));


    $checkedCorrect = 0;
    foreach ($_POST as $item) {
        if (substr($item, 0, 1) == '_') {
            if (in_array(substr($item, 1), $data[$key])) {
                $checkedCorrect++;
            } else {
                $checkedCorrect--;
            }
        }
    }
    if ($mustBeSelectedCount == $checkedCorrect) {
        echo '<h1 style=\'color:green;\'>Tu žmogus</h1>';
    } else {
        echo '<h1 style=\'color:red;\'>Tu esi robotas</h1>';
    }
}

?>
<script>
    let DOM = document.getElementsByTagName('input');
    for (let i = 0; i < DOM.length; i++) {
        if (DOM[i].type == 'checkbox') {
            DOM[i].checked = false;
        }
    }
</script>