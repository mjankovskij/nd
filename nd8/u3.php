<style>
    h1,
    button,
    p {
        margin-left: 50px;
    }
    .box {
        height: 320px;
        margin-left: 50px;
    }

    img {
        float: left;
        width: 300px;
        height: 300px;
        margin-right: 20px;
    }
</style>

<?php
echo '<h1>Apklausa</h1>';

$data = [
    [
        'foto' => 'elnias.jpg',
        'correct' => 'Elnias',
        'answers' => ['Elnias', 'Begemotas', 'Katė', 'Šuo']
    ], [
        'foto' => 'suo.jpg',
        'correct' => 'Šuo',
        'answers' => ['Šuo', 'Begemotas', 'Katė', 'Elnias']
    ], [
        'foto' => 'kate.jpg',
        'correct' => 'Katė',
        'answers' => ['Begemotas', 'Katė', 'Šuo', 'Elnias']
    ],
];

echo '<form method=\'post\'>';

foreach ($data as $key => $item) {
    echo '<div class=\'box\'> <img src=\'./img/' . $item['foto'] . '\' alt=\'' . $item['foto'] . '\'>
    Koks tai gyvunas?<br><br>';
    shuffle($item['answers']);
    foreach ($item['answers'] as $answer) {
        echo '<input type=\'radio\' name=\'' . $key . '\' value=\'' . $answer . '\'>
    <label for=\'' . $answer . '\'>' . $answer . '</label><br>';
    }
    if (isset($_POST[$key])) {
        if ($_POST[$key] == $data[$key]['correct']) {
            echo '<span style=\'margin-top:360px;margin-left:20px;color:green;\'>Jūs atsakėte teisingai</span>';
        }else{
            echo '<span style=\'margin-top:360px;margin-left:20px;color:red;\'>Jūs atsakėte neteisingai</span>';
        }
    }
    echo '</div>';
}

echo '<button>Atsakyti</button>
</form>';

if (!empty($_POST)) {
    $correct = 0;
    foreach ($data as $key => $item) {
        if (empty($_POST[$key])) {
            echo 'Atsakei ne i visus klausimus.';
            return;
        }
        // echo $item['correct'] .'=='. $_POST[$key].'<br>';
        if ($item['correct'] == $_POST[$key]) {
            $correct++;
        }
    }
    echo "<p>Jūs atsakėte teisingai į $correct klausimus iš 3 ir surinkote " . round(100 / count($data) * $correct) . '%.</p>';
}
