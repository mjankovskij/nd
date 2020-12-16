<style>
.box{
    float:left;
    margin-left: 20px;
}
button{
    border-radius: 5px;
    padding: 5px 10px;
}
h1{
    margin-left: 20px;
}
p{
    font-size: 20px;
    font-weight: bold;
}
</style>
<?php
// <img src=\''.__DIR__.'\elnias.jpg\' alt=\'elnias\'></div>
echo '<h1>Apklausa</h1>
<div class=\'box\'>
<img src=\'./img/elnias.jpg\' alt=\'elnias\'></div>
<div class=\'box\'><p>Koks tai gyvunas?</p>
<form method=\'post\'>
<input type="radio" name="answer" value="elnias">
<label for="elnias">Elnias</label><br>
<input type="radio" name="answer" value="suo">
<label for="suo">Šuo</label><br>
<input type="radio" name="answer" value="katinas">
<label for="katinas">Katinas</label><br>
<input type="radio" name="answer" value="begemotas">
<label for="begemotas">Begemotas</label><br><br>
<button>Spėti</button>
</form>
</div>';


if(isset($_POST['answer'])){
    if($_POST['answer']=='elnias'){
        echo '<p style=\'margin-top:360px;margin-left:20px;color:green;\'>Jūsų atsakymas teisingas, tai yra Elnias</p>';
    }else{
        echo '<p style=\'margin-top:360px;margin-left:20px;color:red;\'>Jūsų atsakymas neteisingas</p>';
    }
}

