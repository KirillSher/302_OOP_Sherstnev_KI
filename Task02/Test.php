<?php
function runTest(){
    // String representation test
    $v1 = new \Sherstnev\Task02\Vector(1, 2, 3);
    echo "Ожидается: (1; 2; 3)" . PHP_EOL;
    echo "Получено: " . $v1 . PHP_EOL;

    // Adding test
    $v2 = new \Sherstnev\Task02\Vector(1, 4, -2);
    $v3 = $v1->add($v2);
    echo "Сумма двух векторов:\n";
    echo "Ожидается: (2; 6; 1)" . PHP_EOL;
    echo "Получено: " . $v3 . PHP_EOL;

    $v4 = new \Sherstnev\Task02\Vector(1, 2, -2);
    $v5 = $v3->sub($v4);
    echo "Вычитание одного вектора на другой:\n";
    echo "Ожидается: (1; 4; 3)" . PHP_EOL;
    echo "Получено: " . $v5 . PHP_EOL;

    $number=2;
    $v6 = $v5->product($number);
    echo "Умножение вектора на число:\n";
    echo "Ожидается: (2; 8; 6)" . PHP_EOL;
    echo "Получено: " . $v6 . PHP_EOL;

    $v7 = $v5->scalarProduct($v4);
    echo "Скалярное произведение векторов:\n";
    echo "Ожидается: 3" . PHP_EOL;
    echo "Получено: " . $v7 . PHP_EOL;

    $v8 = $v5->vectorProduct($v4);
    echo "Векторное произведение векторов:\n";
    echo "Ожидается: (-14; 5; -2)" . PHP_EOL;
    echo "Получено: " . $v8 . PHP_EOL;
}
