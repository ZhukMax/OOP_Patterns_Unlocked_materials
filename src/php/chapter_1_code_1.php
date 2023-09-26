<?php

function add($a, $b) {
    return $a + $b;
}

function multiply($a, $b) {
    return $a * $b;
}

$x = 5;
$y = 10;

$sum = add($x, $y);
$product = multiply($x, $y);

echo "Sum: $sum\n";
echo "Product: $product\n";
