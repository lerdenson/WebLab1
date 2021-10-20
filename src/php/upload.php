<?php

require_once "hit_result.php";

date_default_timezone_set('Europe/Moscow');

$start = microtime(true);
$current_time = date("H:i:s");

if (isset($_GET["x"]) && isset($_GET["y"]) && isset($_GET["r"])) {

    $x = $_GET["x"];
    $y = $_GET["y"];
    $r = $_GET["r"];

    $allowedValuesOfX = ['-3', '-2', '-1', '0', '1', '2', '3', '4', '5'];
    $allowedValuesOfR = ['1', '1.5', '2', '2.5', '3'];

    if (in_array($x, $allowedValuesOfX) && $y > -5 && $y < 3 && in_array($r, $allowedValuesOfR)) {

        $hit_result = isHit($x, $y, $r) ? "<span style='color: green'>TRUE</span>" : "<span style='color: red'>FALSE</span>";

        $script_time = number_format(microtime(true) - $start, 8, ".", "") * 1000000;

        die(<<<_END
        <tr>
            <th>$x</th>
            <th>$y</th>
            <th>$r</th>
            <th>$current_time</th>
            <th>$script_time</th>
            <th>$hit_result</th>
        </tr>
_END
        );
    }
}
die("Data is incorrect!");