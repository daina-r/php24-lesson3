<?php

/*$a = 'Ст\'рока 1';
$b = "Строка 2 $a";
$c = "Строка 3 {$b}";
$d = <<<TEXT
Какой-то текст'
"Какой-то текст
К'акой-то текст
TEXT;


//var_dump($a);

$result = ("38.1 попугай" + 1);
var_dump($result);*/

$string = '<i>Hello</i> <b>Netology</b>!!';

$result = substr($string, 6);
$result = str_replace(['Netology', '!'], ['World', '?'], $string);
$result = strpos($string, 'o', 5);
$result = strlen($string);
$result = strip_tags($string, '<b>');



/*$result = md5($string);
var_dump($result);
$string .= ' ';
$string = $string . ' ';
$result = md5($string);*/

$result = 5;
//$result += 10;
$result = $result + 10;
//$result = sha1($string);
//var_dump($string);
var_dump($result);