<?php

require 'solution.php';

$test = array(
    9   => 2,
    529 => 4,
    20  => 1,
    15  => 0,
    32  => 0,
);

foreach ($test as $number => $expected) {
    $actual = solution($number);
    echo 'Number: ', $number, ', expected gap: ', $expected, ', actual gap: ', $actual, PHP_EOL;
    assert($expected == $actual, sprintf('Expected %s but %s got.', $expected, $actual));
}
