<?php

$stylists = [
    'スタイリスト' => 'Takashi',
    'ハイスタイリスト' => 'Ken',
    'トップスタイリスト' => 'Kyoutaro'
];
$select_stylist = '';
$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $select_stylist =  $_POST['stylist'];
    if ($select_stylist){
        $msg='あなたの担当は'.$stylists[$select_stylist].'です';
    }
}?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>埋め込み</title>
</head>

<body>
    <h1>希望する美容師のランクを選んでください</h1>
    <form action="" method="post">
        <select name="stylist">
            <?php foreach ($stylists as $key => $stylist) : ?>
                <option value="<?= $key ?>"><?= $key ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <input type="submit" value="送信">
    </form>
        <p><?=htmlspecialchars($msg, ENT_QUOTES, 'UTF-8')?></p>
</body>

</html>
