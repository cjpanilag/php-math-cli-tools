<?php 

include './lib/Math.php';
include './src/Command.php';

use Lib\Math;
use Src\Command;

if(isset($argv[1]) && function_exists($argv[1])) {
    $parameters = array_slice($argv, 2);
    call_user_func($argv[1], ...$parameters);
}

function commands($a) {
    print Command::run($a);
}
function pythagorean($a, $b) {
    $result = Math::pythagorean($a, $b);
    $result = "\033[32m$result \033[0m\n";
    print $result;
}

function areaOfSquare($length, $width) {
    $result = Math::areaOfSquare($length, $width);
    $result = "\033[32m$result \033[0m\n";
    print $result;
}

