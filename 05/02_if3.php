<?php

$poket_money = 1000;
$fund_raising = 101;

while ($poket_money >= $fund_raising) {
    echo "あなたの所持金は" . $poket_money . "円です。" . PHP_EOL . $fund_raising . "円募金しました｡" . PHP_EOL;
    $poket_money -= $fund_raising;
}
echo "あなたの所持金は" . $poket_money . "円です。" . PHP_EOL . "あなたはこれ以上募金できません｡";
