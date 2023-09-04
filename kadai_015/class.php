<?php
class Food {
    // プロパティを定義する
    private $name;
    private $price;

    // コンストラクタの定義
    public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
    }

    // メソッドを定義する
    public function show_price(){
        echo $this->price . '<br>';
    }
}


class Animal {
    // プロパティを定義する
    private $name;
    private $height;
    private $weight;

    // コンストラクタを定義する
    public function __construct(string $name, int $height, int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // メソッドを定義する
    public function show_height(){
        echo $this->height . '<br>';
    }
}

// Foodクラスからpotatoをインスタンス化する
$potato = new Food('potato', 250);
print_r($potato);
echo '<br>';

// Animalクラスからdogをインスタンス化する
$dog = new Animal('dog', 60, 5000);
print_r($dog);
echo '<br>';

$potato->show_price();
$dog->show_height();
