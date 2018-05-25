<?php

class Car
{
    var $brand;
    var $color;
    var $speed;

    function go($speed = 10)
    {
        $this->speed += $speed;
    }

    function describe()
    {
        return $this->brand . ' ' . $this->color . ' ' . $this->speed;
    }
}

$mercedes = new Car;
$mercedes->brand = 'Mercedes';
$opel = new Car;
$opel->brand = 'Opel';

$mercedes->color = 'Black';
$opel->color = 'Red';


$mercedes->go();
$opel->go(40);

echo $mercedes->describe(), '<br>';
echo $opel->describe();
/*echo '<pre>';
print_r($mercedes);
print_r($opel);
echo '</pre>';*/