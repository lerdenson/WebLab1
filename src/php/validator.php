<?php

const R_MIN = 1, R_MAX = 3;
const X_MIN = -3, X_MAX = 5;

function isValid($x, $y, $r)
{
    if (!is_int($x) || !is_double($y) || !is_int($r)) {
        return false;
    }

    if ($r < R_MIN || $r > R_MAX) {
        return false;
    }

    if ($x < X_MIN || $x > X_MAX) {
        return false;
    }

    if ($y <= -5 || $y >= 3) {
        return false;
    }

    return true;
}