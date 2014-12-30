<?php

require dirname(__DIR__).'/Okvee/Number/NumberThai.php';

$numbers = array(
	-9210000000, '-1000000', '-100000', '-10000', -12, '-0.1234',
	0,
	0.123456789, 0.05, 0.2, 0.23, 0.202, 0.99,
	'1.00',
	1, 5, 10, 11, 12, 13, 20, 21, 30, 33, 
	100, 101, 1000, 1001, 1010, 1011, 1012, 1013, 1100, 
	10000, 10001, 10010, 10011, 12000, 100000, 100001, 100010, 100011, 100012, 100013, 111111, 
	1234567, 87654321, 987654321, 1987654321, 12345678912, 123456789123, 5554321987321, 
	'100000000000000', 
	'100000000000000000000', 
	'10000000000000000000000000', '100000000000000000000000000',
	'1000000000000000000000000000', '10000000000000000000000000000', '100000000000000000000000000000',
	'1000000000000000000000000000000',
	'1000000000000000000000000000000000',
	'10000000000000000000000000000000000',
	'100000000000000000000000000000000000',
	'1000000000000000000000000000000000000',
);

$numthai = new \Okvee\Number\NumberThai();
foreach ($numbers as $num) {
	echo $num.' = '.$numthai->convertBaht($num);
	echo '<br>';
}
echo '<br>';
