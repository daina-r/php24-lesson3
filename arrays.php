<?php

//$cities = ['Москва', '10' => 'Тверь', 10 => 'Рязань', 'Нижний Новгород'];
$cities = [];
$cities[0] = 'Москва';
$cities[1] = 'Санкт Петербург';
$cities[11] = 'Калининград';

echo '<pre>';
print_r($cities);
echo '</pre>';


/*for ($i = 0; $i < count($cities); $i++) {
    echo $i, PHP_EOL;
    echo $cities[$i], PHP_EOL;
}*/

foreach ($cities as $key => $city) {
    echo $key , ' ', $cities[$key], '<br>';
}

