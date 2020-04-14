<?php
// 標準入力から1行取得
$input = trim(fgets(STDIN));
// カンマで分割して配列に代入
$omikuji = explode(",",$input);
// ランダムの上限値を計算して変数に代入
$max = count($omikuji)-1;
// 配列の中身を出力
print_r($omikuji);
// ランダム出力
$key = rand(0,$max);
echo $omikuji[$key];
?>