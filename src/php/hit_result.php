<?php

function isHit($x, $y, $r)
{
    return isYellowZone($x, $y, $r) || isRedZone($x, $y, $r) || isGreenZone($x, $y, $r);
}

function isYellowZone($x, $y, $r)
{
    return ($x <= 0) && ($y <= 0) && ($y >= -1*$x - $r/2) && ($x >= -1*$y - $r/2);
}

function isRedZone($x, $y, $r)
{
    return ($x >= 0) && ($x <= $r) && ($y >= 0) && ($y <= $r/2);
}

function isGreenZone($x, $y, $r)
{
    return ($x <= 0) && ($y >= 0) && ($y*$y + $x*$x <= $r*$r/4);
}