<?php

function solution($n) {
    $n = bindec(rtrim(decbin($n), '0'));
    $c = 0;

    while (($n & ($n + 1))) {
        $n |= $n >> 1;
        $c ++;
    }

    return $c;
}
