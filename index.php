<?php

class Good
{
    public $name;
    public $price;
    public $info;

    public function __construct($name, $price, $info)
    {
        $this->name = $name;
        $this->price = $price;
        $this->info = $info;
    }

    public function show()
    {
        $this->showItem($this->name, 'Название');
        $this->showItem($this->price, 'Цена');
        $this->showItem($this->info, 'Информация');
    }

    public function showItem($item, $itemName)
    {
        echo "$itemName: " . $item . "<br>";
    }
}

class SaleGood extends Good
{
    public $saleDate;

    public function __construct($name, $price, $info, $saleDate)
    {
        parent::__construct($name, $price, $info);
        $this->saleDate = $saleDate;
    }

    public function showSaleDate($saleDate)
    {
        echo "<p style='color: red'>Акция действует до: " . $saleDate . "</p>";
    }

    public function show()
    {
        echo '<hr>';
        $this->showSaleDate($this->saleDate);
        parent::show();
        echo '<hr>';
    }
}


$good = new Good('Тапок', 200, 'Мягкий тапок');
$good->show();

$saleGood = new SaleGood('Ботинок', 400, 'Четкий ботинок', '30.03.2019');
$saleGood->show();


/* Задание №5

Код выведет 1234, так как статическое свойство принадлежит классу А, поэтому любой объект созданный из класса А
будет при вызове метода foo() увеличивать на единицу $х.

Задание №6

Выведется 1122, так как фактически объекты $a1, $b1 созданы разными классами. Несмотря на то, что они родственники
статическая переменная $x у каждого класса "своя", которая будет увеличиваться только объектами созданными именно
этим классом.

Задание №7

Выведется 1122, так как объеты у нас создаются с помощью классов, в которые не передаются параметры при создании
и скобки не требуются, то фактически ничем не отличается от задания 6 отработка статической переменной $x
*/