<?php

$countries = [
    'Russia' => ['Москва', 'Рязань'],
    'Germany' => ['Берлин', 'Мюнхен'],
    'USA' => ['Лос Анжелес', 'Сан-Франциско'],
];

foreach ($countries as $country => $value) {
    echo '<b>', $country, '</b><br>';
    foreach ($value as $city) {
        echo $city, '<br>';
    }
}

//$CamelCase;
//$snake_case;