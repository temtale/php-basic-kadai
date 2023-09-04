<?php
// 連想配列を作成
$onion = [
    '名前' => '玉ねぎ',
    '値段' => 200,
    '産地' => '北海道'
];

// １つずつ取り出して表示
foreach ($onion as $key => $value){
    echo "{$key}:{$value}<br>";
}
