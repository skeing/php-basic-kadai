<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
</head>
<body>
<?php
class Food {
    // プロパティの定義
    private $name;
    private $price;

    // コンストラクタ
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // メソッド
    public function show_price() {
        echo $this->price."<br>";
    }
}

class Animal {
    // プロパティの定義
    private $name;
    private $height;
    private $weight;

    // コンストラクタ
    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // メソッド
    public function show_height() {
        echo "<br>".$this->height;
    }
}
$food = new Food("野菜", 30);
print_r($food);
$food->show_price();

$animal = new Animal("犬", 100, 20);
print_r($animal);
$animal->show_height();
?>
</body>
</html>
