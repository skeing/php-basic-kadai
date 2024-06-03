<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>foreach文を使って連想配列の値とキーを出力しよう</title>
</head>
<body>
<?php
$array = array(
    '名前' => "玉ねぎ",
    '値段' => 200,
    '産地'=> "北海道"
);

foreach($array as $key => $val ){ 
    echo $key.":".$val."<br>";
}
?>
</body>
</html>
