<?php
// 変数に値を代入
$score1 = 80;
$score2 = 60;
$score3 = 55;
$score4 = 40;
$score5 = 100;
$score6 = 25;
$score7 = 80;
$score8 = 95;
$score9 = 30;
$score10 = 60;

// 合計点を変数に代入
$total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

// 合計点を出力
echo "合計点は{$total}です";

echo '<br>';

// 平均点を出力
echo '平均点は' . $total / 10 . 'です';
?>