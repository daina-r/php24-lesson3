<?php

$names = ['Анна', 'Мария', 'Светлана'];

$result = implode(', ', $names);
//var_dump($result);

$result = explode(', ', $result);
//var_dump($result);

//$result = in_array('Анна', $names);
$result = array_search('Иван', $names);

//$result = array_keys($names);

//shuffle($names);

//var_dump($result);
//exit();

//$result = array_shift($names);
//$result = array_pop($names);
/*echo '<pre>';
print_r($names);
echo '</pre>';

var_dump($result);*/

list($name1, $name2, $name3) = $names;

echo $name1, '<br>', $name2, '<br>', $name3;