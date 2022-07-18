<?php

echo '$numの値を入力して下さい: ';
$num = trim(fgets(STDIN));

$flg = true;
if ($num == 1) {
    $flg = false;
}
for($i=2;$i<$num;$i++) {
  if($num%$i == 0) {
    $flg = false;
    break;
  }
}

if ($flg) {
  echo "素数です";
} else {
  echo "素数ではありません";
}
