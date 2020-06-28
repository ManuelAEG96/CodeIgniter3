<?php




$keys = array('0');




for ($i = 1; $i <= 10; $i++) {
	array_push($keys, strval($i*$i));
}

array_shift($keys);
$a = array_fill_keys($keys, 'a');

$i = 0;

foreach ($a as &$element){
	$element = $i;
	$i = $i + 1;
}

//echo $a[2];

print_r($a);