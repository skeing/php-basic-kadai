<?php
// 生徒の点数を配列に入れる
$array = array(80, 60, 55, 40, 100, 25, 80, 95, 30, 60);

// 配列の要素数(生徒10人分)を取得
$array_count = count($array);

echo "変数名とその値<br>";

// 生徒10人分の点数を変数に代入
for($i = 0; $i < $array_count; $i++){
    ${"score" . ($i + 1)} = $array[$i];

    // 変数名とその値を表示
    $varName = "score" . ($i + 1);
    echo $varName . ": " . ${$varName} . "<br>";
}

// 合計点を算出
$sum = 0;
for ($i = 1; $i <=$array_count; $i++) {
    $sum += ${"score" . $i};
}

echo "<br>合計点: " . $sum . "<br>";
echo "平均点: " . ($sum / $array_count). "<br>";